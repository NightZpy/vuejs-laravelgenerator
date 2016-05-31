<?php

namespace App\DataTables;

use App\Models\Provider;
use Form;
use Yajra\Datatables\Services\DataTable;

class ProviderDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('actions', function ($data) {
                            return '
                            ' . Form::open(['route' => ['providers.destroy', $data->id], 'method' => 'delete']) . '
                            <div class=\'btn-group\'>
                                <a href="' . route('providers.show', [$data->id]) . '" class=\'btn btn-default btn-xs\'><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="' . route('providers.edit', [$data->id]) . '" class=\'btn btn-default btn-xs\'><i class="glyphicon glyphicon-edit"></i></a>
                                ' . Form::button('<i class="glyphicon glyphicon-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')"
                            ]) . '
                            </div>
                            ' . Form::close() . '
                            ';
                        })
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $providers = Provider::query();

        return $this->applyScopes($providers);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns(array_merge(
                $this->getColumns(),
                [
                    'actions' => [
                        'orderable' => false,
                        'searchable' => false,
                        'printable' => false,
                        'exportable' => false
                    ]
                ]
            ))
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => true,
                'buttons' => [
                    'csv',
                    'excel',
                    'pdf',
                    'print',
                    'reset',
                    'reload'
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'code' => ['name' => 'code', 'data' => 'code'],
            'name' => ['name' => 'name', 'data' => 'name'],
            'specialty' => ['name' => 'specialty', 'data' => 'specialty'],
            'district' => ['name' => 'district', 'data' => 'district'],
            'address' => ['name' => 'address', 'data' => 'address'],
            'phone' => ['name' => 'phone', 'data' => 'phone'],
            'movil1' => ['name' => 'movil1', 'data' => 'movil1'],
            'movil2' => ['name' => 'movil2', 'data' => 'movil2'],
            'contact' => ['name' => 'contact', 'data' => 'contact'],
            'email' => ['name' => 'email', 'data' => 'email'],
            'created_at' => ['name' => 'created_at', 'data' => 'created_at'],
            'updated_at' => ['name' => 'updated_at', 'data' => 'updated_at'],
            'deleted_at' => ['name' => 'deleted_at', 'data' => 'deleted_at']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'providers';
    }
}
