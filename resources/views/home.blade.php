@extends('layouts.app')

@section('content')
<aside class="right-side">
            <!-- Content Header (Page header) -->
            <!--section ends-->
            <div class="container-fluid">
                <div class="row bg-color">
                    <div class="col-lg-4">
                        <div class="box-model">
                            <h4>Quick Stats</h4>
                            <div class="row">
                                <div class="col-lg-6 col-xs-6 text-center">
                                    <p class="income">Monthly Income</p>
                                    <div id="myStat2" data-dimension="210" data-width="20" data-text="70%" data-fontsize="20" data-percent="70" data-fgcolor="#33a4d8" data-bgcolor="#f7f7f7"></div>
                                </div>
                                <div class="col-lg-6 col-xs-6 text-center">
                                    <p class="income">Yearly Income</p>
                                    <div id="myStat3" data-dimension="210" data-width="20" data-text="85%" data-fontsize="20" data-percent="85" data-fgcolor="#65a800" data-bgcolor="#f7f7f7"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-xs-12">
                                    <div class="amount">
                                        <p>Pending Amount <span class="pull-right">%</span><span id="pending_amount" class="pull-right">30</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-primary"></div>
                                        </div>
                                        <p>Pending Users <span class="pull-right">%</span><span id="fifty" class="pull-right">50</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-model">
                            <h4>Recent Users</h4>
                            <div class="newstick">
                                <div class="recent">
                                    <div class="row">
                                        <img src="img/admin/user1.png" class="recent-user-img" alt="image not found">
                                        <h5>
                                        <a class='text-primary' href='admin_userprofile.html'>Adam B. Engles </a>
                                    </h5>
                                        <small>Yoga<span class="pull-right">
                                25 / 08 / 2016</span></small>
                                    </div>
                                    <div class="row bg-default">
                                        <img src="img/admin/user2.png" class="recent-user-img" alt="image not found">
                                        <h5>
                                        <a class='text-primary' href='admin_userprofile.html'>Barbara A. Egan </a>
                                    </h5>
                                        <small>Aerobics<span class="pull-right">
                                23 / 08 / 2016</span></small>
                                    </div>
                                    <div class="row">
                                        <img src="img/admin/user3.png" class="recent-user-img" alt="image not found">
                                        <h5>
                                        <a class='text-primary' href='admin_userprofile.html'>Caroline G. Turner </a>
                                    </h5>
                                        <small>Power Yoga<span class="pull-right">
                                        19 / 08 / 2016</span></small>
                                    </div>
                                    <div class="row bg-default">
                                        <img src="img/admin/user4.png" class="recent-user-img" alt="image not found">
                                        <h5>
                                        <a class='text-primary' href='admin_userprofile.html'>Kevin S. McCabe </a>
                                    </h5>
                                        <small>Fitness<span class="pull-right">
                                15 / 08 / 2016</span></small>
                                    </div>
                                    <div class="row">
                                        <img src="img/admin/user5.png" class="recent-user-img" alt="image not found">
                                        <h5>
                                        <a class='text-primary' href='admin_userprofile.html'>Richard S. Jensen </a>
                                    </h5>
                                        <small>Fitness<span class="pull-right">
                                15 / 08 / 2016</span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-model">
                            <h4>Users</h4>
                            <div class="row">
                                <div class=" col-lg-12 col-xs-12">
                                    <div class="registered bg-primary">
                                        <div class="row">
                                            <div class="col-lg-8 col-xs-8">
                                                <h5>REGISTERED USERS</h5>
                                            </div>
                                            <div class="col-lg-4 col-xs-4">
                                                <h3 id="userscount"></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="registered bg-success">
                                        <div class="row">
                                            <div class="col-lg-8 col-xs-8">
                                                <h5>THIS MONTH</h5>
                                            </div>
                                            <div class="col-lg-4 col-xs-4">
                                                <h3 id="myTargetElement4.2"></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="registered bg-warning">
                                        <div class="row">
                                            <div class="col-lg-8 col-xs-8">
                                                <h5>LAST MONTH</h5>
                                            </div>
                                            <div class="col-lg-4 col-xs-4">
                                                <h3 id="myTargetElement4.1"></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-model">
                            <div class="row">
                                <div class=" col-lg-12 col-xs-12">
                                    <div class="example">
                                        <div class="example--label"></div>
                                        <div class="example-content">
                                            <div class="list-inline">
                                                <div>
                                                    <div id="custom-cells"></div>
                                                </div>
                                                <div class="calender-content-style" id="custom-cells-events"><strong class="text-primary"></strong>
                                                    <p class="light-color"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-model">
                                    <h4>Growth Analytics</h4>
                                    <div id='chart'>
                                        <svg></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="box-model">
                                    <h4>User Growth</h4>
                                    <div id="chart2">
                                        <svg></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="box-model">
                                    <h4>Trainers</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered trainer">
                                            <thead>
                                                <tr class="bg-primary">
                                                    <th>Sl.No</th>
                                                    <th>Course</th>
                                                    <th>Personal Trainers</th>
                                                    <th>General Trainers</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Yoga</td>
                                                    <td>09</td>
                                                    <td>08</td>
                                                    <td>17</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Aerobics</td>
                                                    <td>12</td>
                                                    <td>10</td>
                                                    <td>22</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Fitness</td>
                                                    <td>14</td>
                                                    <td>12</td>
                                                    <td>26</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Body Building</td>
                                                    <td>11</td>
                                                    <td>09</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Zumba</td>
                                                    <td>15</td>
                                                    <td>12</td>
                                                    <td>27</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Flexibility</td>
                                                    <td>07</td>
                                                    <td>05</td>
                                                    <td>12</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-model event">
                                    <h4 class="">Events</h4>
                                    <div class="events_hover">
                                        <a href='event_item.html'>
                                            <div class="row">
                                                <img src="img/admin/event1.png" class="recent-user-img" alt="image not found">
                                                <h5>One Week Yoga Special Training </h5>
                                                <small>03 / 09 / 2016 - 09 / 09 / 2016</small>
                                                <span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                                <span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            </div>
                                        </a>
                                        <a href='event_item.html'>
                                            <div class="row">
                                                <img src="img/admin/event2.png" class="recent-user-img" alt="image not found">
                                                <h5> Personal Training happy week</h5>
                                                <small>03 / 09 / 2016 - 09 / 09 / 2016</small>
                                                <span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                                <span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            </div>
                                        </a>
                                        <a href='event_item.html'>
                                            <div class="row">
                                                <img src="img/admin/event3.png" class="recent-user-img" alt="image not found">
                                                <h5> 5k Marthon </h5>
                                                <small>25 / 08 / 2016</small>
                                                <span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                                <span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            </div>
                                        </a>
                                        <a href='event_item.html'>
                                            <div class="row">
                                                <img src="img/admin/event4.png" class="recent-user-img" alt="image not found">
                                                <h5>Soul Searching</h5>
                                                <small>18 / 08 / 2016 - 20 / 08 / 2016</small>
                                                <span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span><span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            </div>
                                        </a>
                                        <a href='event_item.html'>
                                            <div class="row">
                                                <img src="img/admin/event5.png" class="recent-user-img" alt="image not found">
                                                <h5>XT Series Championship</h5>
                                                <small>15 / 07 / 2016- 17 / 07 / 2016</small>
                                                <span class="pull-right delete_event" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></span><span class="pull-right edit_event" title="Edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <button class="btn btn-block btn-success add_event" data-toggle="modal" data-target="#myModal">Add Event</button>
                            </div>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">
                                <i class="fa fa-plus"></i> Create Event</h4>
                                        </div>
                                        <form role="form" name="eventform" id="eventform">
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <label for="new-event" class="mar-top">Event Name</label>
                                                    <input type="text" id="new-event" class="form-control" placeholder="Event">
                                                </div>
                                                <label for="event_url" class="mar-top">Event URL</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pull-right" id="event_url" placeholder="Enter The URL related to event" />
                                                </div>
                                                <label for="event_img" class="mar-top">Event Image URL</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pull-right" id="event_img" placeholder="Enter The URL related to event image" />
                                                </div>
                                                <div class="input-group">
                                                    <label for="eventstartdate" class="mar-top">Date Range</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="eventstartdate" placeholder="Start Date">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="eventenddate" placeholder="End Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-3 col-md-offset-3">
                                                        <button type="button" class="btn btn-success btn-block pull-left" id="add-new-event">
                                                            <i class="fa fa-plus"></i> Add
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="reset" class="btn btn-danger btn-block pull-right" id="close_calendar_event">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading text-center">
                                        <h2 class="panel-title social"><i class="fa fa-facebook"></i> Facebook</h2>
                                    </div>
                                    <div class="panel-body text-center">
                                        <h1 id="fb"></h1>
                                        <p>LIKES</p>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading text-center">
                                        <h2 class="panel-title social"><i class="fa fa-twitter"></i> Twitter</h2>
                                    </div>
                                    <div class="panel-body text-center">
                                        <h1 id="tw"></h1>
                                        <p>FOLLOWERS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#right -->
            <!-- /.content -->
</aside>
@endsection
