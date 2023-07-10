@extends('adminlte::page')

@section('css')
    
@stop

@section('content_header')
    <div class="row g-3">
        <div class="col-sm-6">
            <a href="prctcsndstrls/create">
                <x-adminlte-button label="New" theme="primary" icon="fas fa-paste"/>
            </a>
        </div>
        <div class="col-sm-6">
            <h1>Practicas Industriales List</h1>
        </div>
    </div>
@stop

@section('content')
<section class="content">
  <div class="card">
    <div class="card-header">
      
        <x-adminlte-datatable id="table8" :heads="$heads" head-theme="dark" :config="$config" striped hoverable with-buttons beautify>
            @foreach($documents as $document)
                <tr>
                    <td>{{ $document->name_of_the_institution }}</td>
                    <td>{{ $document->reception_date }}</td>
                    <td>{{ $document->cite_or_number }}</td>
                    <td>{{ $document->sender }}</td>
                    <td>{{ $document->addressee }}</td>
                    <td>{{ $document->reference }}</td>
                    <td>{{ $document->number_of_sheets }}</td>
                    <td>{{ $document->folder_name_and_year }}</td>
                    <td>{{ $document->observation }}</td>
                        <td>
                            <a href="Practicas Industriales/{{ $document->pdf }}" target="blank_">
                                <x-adminlte-button label="PDF" theme="success" icon="fas fa-file-pdf"/>
                            </a>
                        </td>
                    <td>
                        <form action="{{ route('prctcsndstrls.destroy', $document->id) }}" method="POST" class="form-delete">
                            <a href="/prctcsndstrls/{{ $document->id}}/edit">
                                <x-adminlte-button class="text-white" label="Edit" theme="warning" icon="fas fa-pen"/>
                            </a>
                            @csrf
                            @method('DELETE')
                            <x-adminlte-button type="submit" label="Delete" theme="danger" icon="fas fa-trash"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>

    </div>
  </div>
</section>
@stop

@section('footer')
    <footer class="footer">
        <strong>Copyright &copy; 1999-2023 <a href="https://www.chuquisaca.gob.bo/">GADCH|DH|Oficial</a>.</strong>All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.0.1
            </div>
    </footer>
@stop

@section('js')

    {{-- Script to Store Notification --}}
    @if (session('store') == 'str')
        <script>
            const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire(
                    'Saved!',
                    '',
                    'success'
                )
        </script>
    @endif

    {{-- Script to Edit Notification --}}
    @if (session('edit') == 'dt')
        <script>
            const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire(
                    'Changes are Saved!',
                    '',
                    'success'
                )
        </script>
    @endif

    {{-- Script to Delete Notification --}}
    @if (session('delete') == 'dlt')
        <script>
            const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    '',
                    'success'
                )
        </script>
    @endif

    {{-- Modal to Notification --}}
    <script>
        $('.form-delete').submit(function(e){
            e.preventDefault();
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: '',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',   
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {

                    if (result.isConfirmed) {

                        this.submit();
                    } else if (

                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            '',
                            'error'
                        )
                }
            })
        })
    </script>

@stop
