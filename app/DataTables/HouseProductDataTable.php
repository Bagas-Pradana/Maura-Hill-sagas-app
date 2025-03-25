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
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->setRowId('unit')
            ->editColumn('unit', function ($row) {
                return '<span class="badge badge-primary">' . $row->unit . '</span>';
            })
            ->editColumn('title', function ($row) {
                return $row->title;
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
            ->rawColumns(['unit', 'title', 'action']);
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
            Column::make('title')->title('Description Title')->searchable(true),
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