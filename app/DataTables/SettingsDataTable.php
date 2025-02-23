<?php

namespace App\DataTables;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SettingsDataTable extends DataTable
{
    // Helper
    private function formatJsonAsList($data): string
    {
        $html = '<ul style="list-style-type: none; padding: 0; margin: 0;">';
        foreach ($data as $key => $value) {
            $html .= "<li><strong>{$key}:</strong> {$value}</li>";
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
            ->editColumn('value', function ($row) {
                // Jika is_array true, decode JSON dan tampilkan sebagai list
                if ($row->is_array) {
                    $value = json_decode($row->value, true); // Decode JSON string ke array
                    return $this->formatJsonAsList($value); // Format array sebagai list
                }
                // Jika bukan array, tampilkan value biasa
                return json_decode($row->value);
            })
            ->addColumn('action', function ($row) {
                // Set Url
                $buttons = '';
                $urlEdit = route('setting.edit', ':id');
                $urlDelete = route('setting.destroy', ':id');
                // Set Button
                $buttons .= '
                    <a href="javascript:void(0)" style="white-space:nowrap; padding: 8px; " class="btn hover-scale btn-warning btn-sm btn-edit" data-url="' . $urlEdit . '" data-id="' . $row->uuid . '"><i  class="mdi mdi-pencil"></i></a>
                    <a href="javascript:void(0)" style="white-space:nowrap; padding: 8px;" class="btn hover-scale btn-danger btn-sm btn-delete" data-url="' . $urlDelete . '" data-id="' . $row->uuid . '"><i class="mdi mdi-delete"></i></a>
                ';

                return '<div class="d-flex flex-row justify-content-center gap-2">' . $buttons . '</div>';
            })
            ->rawColumns(['uuid', 'action', 'value']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Setting $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('settings-table')
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
            // ->buttons([
            //     Button::make('excel'),
            //     Button::make('csv'),
            //     Button::make('pdf'),
            //     Button::make('print'),
            //     Button::make('reset'),
            //     Button::make('reload')
            // ]);
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
            Column::make('uuid')->title('ID')
                ->addClass('text-center')
                ->searchable(true)
                ->width(150),
            Column::make('key')->title('Key')->searchable(true),
            Column::make('value')->title('Value')->searchable(true),
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
        return 'Settings_' . date('YmdHis');
    }
}