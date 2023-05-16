<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <link href="{{ asset('assets/css/dash.css') }}" rel="stylesheet">

                    <li>
                        <a href="{{Route('backend.dashboard.index')}}"><i class="fa-solid fa-house-user"></i>
                            <span class="right-nav-text">{{ trans('sidebar_trans.Dashboard') }}</span> </a>
                    </li>

                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title"> </li>


                    <!-- menu admins-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#admins-menu">
                            <div class="pull-left"><i class="fa fa-user" aria-hidden="true"></i><span
                                    class="right-nav-text">{{ trans('sidebar_trans.Admins') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="admins-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('backend.admins.create')}}">{{ trans('sidebar_trans.Add_Admin') }}  </a> </li>
                            <li> <a href="{{Route('backend.admins.index')}}">{{ trans('sidebar_trans.All_Admins') }}</a> </li>
                            <li> <a href="{{Route('backend.admins.trash')}}">{{ trans('sidebar_trans.Trash_Admins') }}</a> </li>
                        </ul>
                    </li>

                     <!-- menu supervisors-->
                     <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#supervisors-menu">
                            <div class="pull-left"><i class="fa fa-user" aria-hidden="true"></i><span
                                    class="right-nav-text">{{ trans('sidebar_trans.Supervisors') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="supervisors-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('backend.supervisors.create')}}">{{ trans('sidebar_trans.Add_Supervisor') }}  </a> </li>
                            <li> <a href="{{Route('backend.supervisors.index')}}">{{ trans('sidebar_trans.All_Supervisors') }}</a> </li>
                            <li> <a href="{{Route('backend.supervisors.trash')}}">{{ trans('sidebar_trans.Trash_Supervisors') }}</a> </li>

                        </ul>
                    </li>

                      <!-- menu users-->
                      <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#users-menu">
                            <div class="pull-left"><i class="fa fa-user" aria-hidden="true"></i><span
                                    class="right-nav-text">{{ trans('sidebar_trans.Users') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="users-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('backend.users.create')}}">{{ trans('sidebar_trans.Add_User') }}  </a> </li>
                            <li> <a href="{{Route('backend.users.create')}}">{{ trans('sidebar_trans.All_Users') }}</a> </li>
                            <li> <a href="{{Route('backend.users.create')}}">{{ trans('sidebar_trans.Trash_Users') }}</a> </li>

                        </ul>
                    </li>

                    <!-- menu doctors-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#doctors-menu">
                            <div class="pull-left"><i class="fa fa-user-md" aria-hidden="true"></i><span
                                    class="right-nav-text">{{ trans('sidebar_trans.Doctors') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="doctors-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('backend.doctors.create')}}">{{ trans('sidebar_trans.Add_Doctor') }}  </a> </li>
                            <li> <a href="{{Route('backend.doctors.index')}}">{{ trans('sidebar_trans.All_Doctors') }}</a> </li>
                            <li> <a href="{{Route('backend.doctors.trash')}}">{{ trans('sidebar_trans.Trash_Doctors') }}</a> </li>

                        </ul>
                    </li>

                      <!-- menu schedules-->
                      <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#schedules-menu">
                            <div class="pull-left"><i class="fa fa-calendar" aria-hidden="true"></i><span
                                    class="right-nav-text">{{ trans('sidebar_trans.Schedules') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="schedules-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('backend.schedules.create')}}">{{ trans('sidebar_trans.Add_Schedule') }}  </a> </li>
                            <li> <a href="{{Route('backend.schedules.index')}}">{{ trans('sidebar_trans.All_Schedules') }}</a> </li>
                            <li> <a href="{{Route('backend.schedules.trash')}}">{{ trans('sidebar_trans.Trash_Schedules') }}</a> </li>

                        </ul>
                    </li>



                    <!-- menu patients-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#patients-menu">
                            <div class="pull-left"><i class="fa fa-user" aria-hidden="true"></i><span
                                    class="right-nav-text">{{ trans('sidebar_trans.Patients') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="patients-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('backend.patients.create')}}">{{ trans('sidebar_trans.Add_Patient') }}  </a> </li>
                            <li> <a href="{{Route('backend.patients.index')}}">{{ trans('sidebar_trans.All_Patients') }}</a> </li>
                            <li> <a href="{{Route('backend.patients.trash')}}">{{ trans('sidebar_trans.Trash_Patients') }}</a> </li>

                        </ul>
                    </li>





                    <!-- menu appointments-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#appointments-menu">
                            <div class="pull-left"><i class="fa fa-stethoscope"></i><span
                                    class="right-nav-text">{{ trans('sidebar_trans.Appointments') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="appointments-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('backend.appointments.create')}}">{{ trans('sidebar_trans.Add_Appointment') }}  </a> </li>
                            <li> <a href="{{Route('backend.appointments.index')}}">{{ trans('sidebar_trans.All_Appointments') }}</a> </li>
                            <li> <a href="{{Route('backend.appointments.trash')}}">{{ trans('sidebar_trans.Trash_Appointments') }}</a> </li>

                        </ul>
                    </li>


                      <!-- menu medical_centers-->
                      <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#medical_centers-menu">
                            <div class="pull-left"><i class="fa fa-hospital-o" aria-hidden="true"></i><span
                                    class="right-nav-text">{{ trans('sidebar_trans.Medical_Centers') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="medical_centers-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('backend.medical_centers.create')}}">{{ trans('sidebar_trans.Add_Medical_Center') }}  </a> </li>
                            <li> <a href="{{Route('backend.medical_centers.index')}}">{{ trans('sidebar_trans.All_Medical_Centers') }}</a> </li>
                            <li> <a href="{{Route('backend.medical_centers.trash')}}">{{ trans('sidebar_trans.Trash_Medical_Centers') }}</a> </li>

                        </ul>
                    </li>


                      <!-- menu labs-->
                      <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#labs-menu">
                            <div class="pull-left"><i class="fa fa-hospital-o" aria-hidden="true"></i><span
                                    class="right-nav-text">{{ trans('sidebar_trans.Labs') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="labs-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('backend.labs.create')}}">{{ trans('sidebar_trans.Add_Lab') }}  </a> </li>
                            <li> <a href="{{Route('backend.labs.index')}}">{{ trans('sidebar_trans.All_Labs') }}</a> </li>
                            <li> <a href="{{Route('backend.labs.trash')}}">{{ trans('sidebar_trans.Trash_Labs') }}</a> </li>

                        </ul>
                    </li>



                      <!-- menu reports-->
                      <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#reports-menu">
                            <div class="pull-left"><i class="fa fa-hospital-o" aria-hidden="true"></i><span
                                    class="right-nav-text">Forms</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="reports-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{Route('backend.reports.create')}}">Add_Form </a> </li>
                            <li> <a href="">All_Form</a> </li>
                            <li> <a href="">Trash_Form</a> </li>

                        </ul>
                    </li>







                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
