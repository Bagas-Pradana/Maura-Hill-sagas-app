<?php

namespace App\DataTables;

use App\Models\HouseProduct;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class HouseProductDataTable extends DataTable
{
    // Helper
    private function formatJsonAsList($data): string
    {
        $html = '<ul style="list-style-type: none; padding: 0; margin: 0;">';

        // Periksa jika data adalah array
        foreach ($data as $item) {
            // Pastikan bahwa item adalah array dengan kunci 'label', 'value', dan 'unit'
            if (isset($item['label'], $item['value'], $item['unit'])) {
                $html .= "<li><strong>{$item['label']}:</strong> {$item['value']} {$item['unit']}</li>";
            }
        }

        $html .= '</ul>';
        return $html;
    }

    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->setRowId('uuid')
            ->editColumn('uuid', function ($row) {
                return '<span class="badge badge-primary">' . $row->uuid . '</span>';
            })
            ->editColumn('key', function ($row) {
                return $row->key;
            })
            ->editColumn('specification_table', function ($row) {
                // Jika is_array true, decode JSON dan tampilkan sebagai list
                $specification_table = json_decode($row->specification_table, true); // Decode JSON string ke array
                if (is_array($specification_table)) {
                    return $this->formatJsonAsList($specification_table); // Format array sebagai list
                }
                // Jika bukan array, tampilkan specification_table biasa
                // return json_decode($row->specification_table);
                return $row->specification_table;
            })
            ->addColumn('action', function ($row) {
                // Set Url
                $buttons = '';
                $urlEdit = '';
                $urlDelete = '';
                // Set Button
                $buttons .= '
                    <a href="javascript:void(0)" style="white-space:nowrap; padding: 8px; " class="btn hover-scale btn-warning btn-sm btn-edit" data-url="' . $urlEdit . '" data-id="1"><i  class="mdi mdi-pencil"></i></a>
                    <a href="javascript:void(0)" style="white-space:nowrap; padding: 8px;" class="btn hover-scale btn-danger btn-sm btn-delete" data-url="' . $urlDelete . '" data-id="2"><i class="mdi mdi-delete"></i></a>
                ';

                return '<div class="d-flex flex-row justify-content-center gap-2">' . $buttons . '</div>';
            })
            ->rawColumns(['unit', 'title', 'specification_table', 'action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(HouseProduct $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('houseProducts-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->selectStyleSingle()
            ->parameters([
                'autoWidth' => false,
                'scrollX' => true,
                'order' => [
                    [2, 'asc']
                ],
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('DT_RowIndex')
                ->title('No')
                ->width(50)
                ->addClass('text-center ps-4')
                ->searchable(false)
                ->orderable(false),
            Column::make('unit')->title('Type')
                ->addClass('text-center')
                ->searchable(true)
                ->width(150),
            Column::make('title')
                ->title('Description Title')
                ->searchable(true)
                ->addClass('text-center pe-4'),
            Column::make('specification_table')
                ->title('Specification')
                ->searchable(true)
                ->addClass('text-center pe-4'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(100)
                ->addClass('text-center pe-4'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'HouseProducts_' . date('YmdHis');
    }
}
