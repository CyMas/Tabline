<!DOCTYPE html>
<html lang="en">

<head>


    @if(Auth::user()->type=="admin")
        <title>Tabline - Admin</title>
    @else(Auth::user()->type=="user")
        <title>Tabline - Member</title>
    @endif

    <link href="/css/bootstrap.min.css" rel="stylesheet"> 

   <link href="/css/sb-admin.css" rel="stylesheet"> 

    <link href="/css/plugins/morris.css" rel="stylesheet"> 

    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/tabline/member/index">Welcome {{ Auth::user()->nama }}</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->nama }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/tabline/member/setting"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="/tabline/member/index"><i class="fa fa-fw fa-desktop"></i> Home</a>
                    </li>
                    @if(Auth::user()->type=="user")
                        <li class="active">
                            <a href="javascript:;" data-toggle="collapse" data-target="#input"><i class="fa fa-fw fa-arrows-v"></i> Input <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="input" class="collapse">
                                <li>
                                    <a href="/tabline/member/permintaan"><i class="fa fa-fw fa-edit"></i> Permintaan</a>
                                </li>
                                <li>
                                    <a href="/tabline/member/setoran"><i class="fa fa-fw fa-edit"></i> Setoran</a>
                                </li>
                            </ul>
                        </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#history"><i class="fa fa-fw fa-arrows-v"></i> History <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="history" class="collapse">
                            <li>
                                <a href="/tabline/member/history/permintaan"><i class="fa fa-fw fa-table"></i> History Permintaan</a>
                            </li>
                            <li>
                                <a href="/tabline/member/history/setoran"><i class="fa fa-fw fa-table"></i> History Setoran</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->type=="admin")
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#history"><i class="fa fa-fw fa-arrows-v"></i> History <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="history" class="collapse">
                                <li>
                                    <a href="/tabline/member/histori/permintaan"><i class="fa fa-fw fa-table"></i> History Permintaan</a>
                                </li>
                                <li>
                                    <a href="/tabline/member/histori/setoran"><i class="fa fa-fw fa-table"></i> History Setoran</a>
                                </li>
                                <li>
                                    <a href="/tabline/member/histori/kritik-saran"><i class="fa fa-fw fa-table"></i> History Kritik/Saran </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/tabline/member/list"><i class="fa fa-fw fa-table"></i> List Anggota</a>
                        </li>
                    @endif
                    <li>
                        <a href="/tabline/member/setting"><i class="fa fa-fw fa-wrench"></i> Setting Profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Setoran
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-desktop"></i>  <a href="/tabline/member/index">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Setoran
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="col-lg-6">
                        <h2></h2>
                        <div class="table-responsive">
                            <form action="{{ url('tabline/member/setoran/save') }}" method="POST" enctype="multipart/form-data">
                            <table class="table hovered" style="width: 100%">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <tr>
                                    <td>Username</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="text" name="username" id="username" value="{{ Auth::user()->username }}" autocomplete="off" readonly>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Nasabah</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="text" name="nama_nasabah" id="nama_nasabah" autocomplete="off">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No Rekening</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="text" name="no_rek" id="no_rek" autocomplete="off">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Rekening</td>
                                    <td>                        
                                        <div class="input-control select">
                                            <select class="form-control" name="jenis_rek" id="jenis_rek">
                                                <option>BCA</option>
                                                <option>Mandiri</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jumlah Pengeluaran</td>
                                    <td><div class="form-group input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input type="text" class="form-control" name="jumlah_pengeluaran" id="jumlah_pengeluaran">
                                            
                                        </div>
                                    </td>
                                </tr>
                                
                            </table>
                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Cancel</button>              
                            </form>   
                            <br>      
                    

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!-- {!! HTML::script('member/js/jquery.js') !!} -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- {!! HTML::script('member/js/bootstrap.min.js') !!} -->
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>
