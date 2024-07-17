@extends('frontend.rcms.layout.main_rcms')
@section('rcms_container')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script>
        function openTab(tabName, ele) {
            let buttons = document.querySelector('.process-groups').children;
            let tables = document.querySelector('.process-tables-list').children;
            for (let element of Array.from(buttons)) {
                element.classList.remove('active');
            }
            ele.classList.add('active')
            for (let element of Array.from(tables)) {
                element.classList.remove('active');
                if (element.getAttribute('id') === tabName) {
                    element.classList.add('active');
                }
            }
        }
    </script>

    <style>
        header .header_rcms_bottom {
            display: none;
        }

        .filter-sub {
            display: flex;
            gap: 16px;
            margin-left: 13px
        }
    </style>
    <style>
        .filter-bar {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
        }

        .filter-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .table-responsive {
            height: 100vh;
            overflow-x: scroll;

        }

        .filter-item label {
            margin-right: 10px;
        }

        table {
            overflow: scroll
        }
    </style>
    <div id="rcms-desktop">

        <div class="process-groups">
            <div class="active" onclick="openTab('internal-audit', this)">OOS / OOT Log </div>
        </div>
        <div class="main-content">
            <div class="container-fluid">
                <div class="process-tables-list">
                    <div class="process-table active" id="internal-audit">
                        <div class="mt-1 mb-2 bg-white " style="height: 65px">
                            <div class="d-flex align-items-center">
                                <div class="scope-bar ml-3">
                                    <button style="width: 70px;margin-left:5px"
                                        class="print-btn btn btn-primary">Print</button>
                                </div>
                                <div class="flex-grow-2" style="margin-left:-50px; margin-bottom:12px">
                                    <div class="filter-bar d-flex justify-content-between">
                                        <div class="filter-item">
                                            <label for="process">Department</label>
                                            <select class="custom-select" id="process">
                                                <option value="all">All Records</option>

                                            </select>
                                        </div>
                                        <div class="filter-item">
                                            <label for="criteria">Division</label>
                                            <select class="custom-select" id="criteria">
                                                <option value="all">All Records</option>

                                            </select>
                                        </div>
                                        <div class="filter-item">
                                            <label for="division">Date From</label>
                                            <select class="custom-select" id="division">
                                                <option value="all">All Records</option>

                                            </select>
                                        </div>
                                        <div class="filter-item">
                                            <label for="originator">Date To</label>
                                            <select class="custom-select" id="originator">
                                                <option value="all">All Records</option>

                                            </select>
                                        </div> 
                                        <div class="filter-item">
                                            <label for="originator">Type of Document</label>
                                            <select class="custom-select" id="originator">
                                                <option value="all">All Records</option>

                                            </select>
                                        </div>
                                        <div class="filter-item">
                                            <label for="datewise">Select Period</label>
                                            <select class="custom-select" id="datewise">
                                                <option value="all">Select</option>
                                                <option value="all">Yearly</option>
                                                <option value="all">Quarterly</option>
                                                <option value="all">Mothly</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-block">
                            <div class="table-responsive" style="height: 300px">
                                <table class="table table-bordered" style="width: 120%;">
                                    <thead>
                                        <tr>
                                          <tr>
                                            <th style="width: 5%;">Sr.No.</th>
                                            <th>Date of Initiation</th>
                                            <th>Record No.</th>
                                            <th>Short Description </th>
                                            <th>Type of Document </th>
                                            <th>Product / Material  </th>
                                            <th>Batch No. / AR No. </th>
                                            <th>Due Date</th>
                                            <th>Closure Date</th>
                                            <th>Status</th>
                                            
                                            
                                        </tr>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($oots as $ootlog)
                                            
                                        <tr>
                                            
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$ootlog->intiation_date}}</td>
                                            <td>{{$ootlog->record_number}}</td>
                                            <td>{{$ootlog->description_of_oot_details}}</td>
                                            <td></td>
                                            <td></td>
                                            <td>{{$ootlog->closure_date}}</td>
                                            <td>{{$ootlog->due_date}}</td>
                                            <td>{{$ootlog->Final_Approval_on}}</td>
                                            <td>{{$ootlog->status}}</td>
                                            
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script>
        VirtualSelect.init({
            ele: '#Facility, #Group, #Audit, #Auditee ,#capa_related_record ,#classRoom_training'
        });
    </script>
@endsection
