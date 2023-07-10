@extends('adminlte::page')

@section('css')

@stop

@section('content_header')
    <div class="row g-3">
        <div class="col-sm-6">
            <form action="/vrs" method="POST" enctype="multipart/form-data">
                <a href="/vrs">
                    <x-adminlte-button class="text-white" label="Cancel" theme="warning" icon="fas fa-exclamation-triangle"/>
                </a>
                <x-adminlte-button type="submit" label="Save" theme="success" icon="fas fa-paste"/>
        </div>
        <div class="col-sm-6">
            <h1>Varios Create Files</h1>
        </div>
    </div>
@stop

@section('content')

<section class="content">
    <div class="card">
        <div class="card-header">

                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <x-adminlte-input id="name_of_the_institution" name="name_of_the_institution" label="Name of the Institution" placeholder="Name of the Institution" label-class="text-dark" required>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-building text-primary"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    (GADCH - YPFB - USFX - Full Name of the Institution)
                                </span>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-sm-6">
                        <x-adminlte-input-date id="reception_date" name="reception_date" label="Reception Date" placeholder="Reception Date" label-class="text-dark" :config="$config" required>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-calendar-alt text-primary"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    (AAAA/MM/DD Date Format)
                                </span>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>
                    <div class="col-sm-6">
                        <x-adminlte-input id="cite_or_number" name="cite_or_number" label="CITE or Number" placeholder="CITE or Number" label-class="text-dark" required>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-hashtag text-primary"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    (Numbers, Letters, Etc...)
                                </span>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-sm-6">
                        <x-adminlte-input id="sender" name="sender" label="Sender" placeholder="Sender" label-class="text-dark" required>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-user text-primary"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    (Sender's Full Name)
                                </span>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-sm-6">
                        <x-adminlte-input id="addressee" name="addressee" label="Addressee" placeholder="Addressee" label-class="text-dark" required>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-user text-primary"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    (Full Name of the Recipient)
                                </span>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-sm-6">
                        <x-adminlte-textarea id="reference" name="reference" label="Reference" rows=2 placeholder="Reference" label-class="text-dark" required>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-file-alt text-primary"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    (Reference of the Document in question)
                                </span>
                            </x-slot>
                        </x-adminlte-textarea>
                    </div>
                    <div class="col-sm-6">
                        <x-adminlte-input id="number_of_sheets" name="number_of_sheets" label="Number of Sheets" placeholder="Number of Sheets" label-class="text-dark" required>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-hashtag text-primary"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    (Number of Sheets of the Document in question)
                                </span>
                            </x-slot>
                        </x-adminlte-input>
                    </div>

                    <div class="col-sm-6">
                        <x-adminlte-select2 id="folder_name_and_year" name="folder_name_and_year" label="Folder Name and Year" rows=2 data-placeholder="Folder Name and Year" label-class="text-dark" required>>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-folder-open text-primary"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    (Name of the Folder belonging to the Document in question)
                                </span>
                            </x-slot>
                            <option/>
                            <option>Vrs.</option>
                        </x-adminlte-select2>
                    </div>
                    <div class="col-sm-6">
                        <x-adminlte-textarea id="observation" name="observation" label="Observation" rows=2 placeholder="Observation" label-class="text-dark" required>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-file-alt text-primary"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    (Pertinent Observations on the Documents)
                                </span>
                            </x-slot>
                        </x-adminlte-textarea>
                    </div>
                    <div class="col-sm-6">
                        <x-adminlte-input-file id="pdf" name="pdf" label="PDF" placeholder="PDF" legend="Choose" multiple label-class="text-dark" required>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-file-pdf text-primary"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    (PDF's scanned)
                                </span>
                            </x-slot>
                        </x-adminlte-input-file>
                    </div>
                </div>
            </form>

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

@stop