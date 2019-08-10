@extends('admin.layout.master')
@section('content')
<style type="text/css">
    table{
    border-collapse: collapse;
    border: 1px;
    font-size: 15px;
    border-right:none;
    border-left: none;
    border-bottom: none;
    
}
    th,tr,td{
        border-style: solid;
        border-right:none;
        border-width: 2px;
    /*border-left: none;*/
    }
    .table-first{
      border-color: blue;
    }
    .bill-title{
        margin-left: 235px;
        font-size: 22px;
    }
    .bill-sub{
        margin-left: 40px; 
    }
    .bill-sub-1{
        margin-left: 160px;
    }
   /* .all,.first{
      border:1px solid black;
    }*/
    .border{
        border-width: 2px;
        border-color: black;
    }
    .absolute {
        position: absolute;
        left: 80px;
        width: 200px;
        height: 100px;
      }
      .Narrow{
        margin-left: 60px;
      }
      .tableview{
        margin-left: 5px;
        margin-bottom: -22px;
      }
      .inside-table{
        margin-left: 100px;
      }
      .tableview-1{
        margin-left: 5px;
        padding-top: -30px
      }
      .tableview-2{
        margin-top: -22px;
      }
      table.second-table{
      border-left:none;
      }
      
</style>
<div class="row">
<div class="col-xs-12 ">
<div class="box box-info">
{{ csrf_field() }}
<div class="wrapper">
  <section class="invoice ">
    <div style="border: 2px solid black; ">
      <div class="row" >
        <div class="col-xs-12">
          <h2 class="page-header">
            <div class="row invoice-info">
              <div class="col-sm-8">
                <div class="bill-title"><b>KAVYA TRANSPORTS </b></div><br>
                <div class="bill-sub">
                <font size="4"> Door No. 7/14/13A Raams Complex, Trivandram Road, Opp. IRT Polytechnic,</font>
                </div>
                <div class="bill-sub-1">
                      <font size="4">Tirunelveli - 627007. Tamilnadu, India.</font>
                </div><br>
              </div>
              <div class="col-sm-4">
                <div class="col-sm-9">
                <span class=""><font size="3">Mobile</font></span>
                </div><br><br><br>
                <div class="col-sm-9">
                <span class=""><font size="3">E-mail</font></span>
                </div>
              </div>
            </div>
          </h2>
        </div>
      </div>
        <div class="col-xs-12" style="padding-right: 0px">
            <div class="col-sm-2">
                <b class="absolute">M/s</b> 
              </div>
              <div class="col-sm-6 invoice-col">
                <address class="Narrow"><br>
                  795 Folsom Ave, Suite 600
                  San Francisco, CA 94107
                  america
                </address>
             </div>
             <div class="col-sm-4">
                 <div class="row">
                      <div class="tableview">
                          <div class="table-responsive">
                              <table class="table table-striped">
                                    <thead>
                                    <tr>
                                      <th>Bill No.</th>
                                      <td>987654321</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <td><b>Date</b></td>
                                      <td>Call of Duty</td>
                                    </tr>
                                    </tbody>
                              </table>
                            </div>
                      </div>
                 </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 table-responsive" style="padding-left: 13px">
                  <table class="table table-striped second-table">
                    <tbody>
                    <tr class="border">
                      <th>BOOKING STATION</th>
                      <th>DESTINATION</th>
                      <th>TRUCK NO. </th>
                      <th>PARTY INVOICE NO.</th>
                      <th>L.R No.</th>
                      <th>DATE</th>
                      <th>WEIGHT</th>
                      <th>RATE</th>
                      <th>FREIGHT</th>
                      <th>BILTY CHARGES</th>
                      <th>TOTAL FREIGHT</th>
                      <th>REMARKS</th>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Call of Duty</td>
                      <td>455-981-221</td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>$64.50</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Call of Duty</td>
                      <td>455-981-221</td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>El snort </td>
                      <td>$64.50</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="col-xs-12" style="padding-right: 0px;">
            <div class="col-sm-2"><br>
                <b class="absolute">RUPEES IN WORDS</b> 
              </div>
              <div class="col-sm-6 invoice-col">
                <address class="Narrow"><br><br>
                  795 Folsom Ave, Suite 600
                  San Francisco, CA 94107
                  america
                </address>
             </div>
             <div class="col-sm-4">
                 <div class="row">
                      <div class="tableview-2">
                          <div class="table-responsive">
                              <table class="table table-striped">
                                    <thead>
                                    <tr>
                                      <td><b>TOTAL</b></td>
                                      <td>987654321</td>
                                    </tr>
                                    </thead>
                                    <!-- <tbody>
                                    <tr class="table-first">
                                      <td><b>Date</b></td>
                                      <td>Call of Duty</td>
                                    </tr>
                                    </tbody> -->
                              </table>
                            </div>
                      </div>
                 </div>
                </div>
        </div>    
        <div class="col-xs-12" style="padding-right: 0px">
            <div class="col-sm-4"><br><br>
                <b class="absolute">E & O.E.</b> 
              </div>
              <div class="col-sm-4 invoice-col">
                <address class="Narrow"><br><br>
                  PAN NO. ALIPN8276G <br>
                 <p align="left">GST NO.</p> 
                </address>
             </div>
             <div class="col-sm-4">
                 <div class="row">
                      
                      <div align="center"><br><br>
                        For  KAVYA TRANSPORTS <br>
                        Mohan(CTO)<br>
                      (Authorised Signature)
                       </div>
                 </div>
                </div>
            </div>
                <div>
                    
                    <br><br><br><br><br><br><br><br><br><br><br>
                </div>
                    
        </div>
        </section>
  </div>
      </div>
    </div>
  </div>
</div>
    @endsection