@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('js')
    <script>
        function ConfirmaExclusao(id) {
            swal.fire({
                title: 'Confirma a exclusão?', text: "Esta ação não pederá ser revertida!", 
                type: 'warning', showCancelButton: true, confirmBottonColor: '#3085d6',
                cancelButtonColor: '#d33', confirmButtonText: 'Sim! Excluir.',
                cancelButtonText: 'Cancelar!', closeOnConfirm: false,
            }).then(function(isConfirm) {
                if(isConfirm.value) {
                    $.get('/'+ @yield('table-delete') +'/'+id+'/destroy', function(data){
                        //sucess data
                        console.log(data);
                        if(data.status == 200){
                            swal.fire(
                                'Deletado!',
                                'Exlusão confirmada.',
                                'success'
                            ).then(function(isConfirm) {
                                window.location.reload();
                            });
                        }else{
                            swal.fire(
                                'Erro!',
                                'Ocorreu erro na exclusão. Entre em contato com o suprote.',
                                'error'
                            );
                        }                        
                    });
                }
            })
        }
    </script>
@stop