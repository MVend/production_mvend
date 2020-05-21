<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Aggregate Services</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Service id</th>
                                                <th>Merchant id</th>
                                                <th>ServiceName</th>
                                                <th>Report_frequency</th>
                                                <th>Settlement_frequency</th>
                                                <th>ServiceStatus</th>
                                                <th>SettlementMethod</th>
                                                <th>SettlementBank</th>
                                                <th>AccountDetails</th>
                                                <th>AccountBalance</th>
                                                <th>Action#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($aggregates as $key => $value): ?>
                                    <tr>
                                        <td><?php echo $value["service_id"]; ?></td>
                                        <td><?php echo $value["merchant_id"]; ?></td>
                                        <td><?php echo $value["service_name"]; ?></td>
                                        <td><?php echo $value["report_frequency"]; ?></td>
                                        <td><?php echo $value["settlement_frequency"]; ?></td>
                                        <td><?php echo $value["service_status"]; ?></td>
                                        <td><?php echo $value["settlement_method"]; ?></td>
                                        <td><?php echo $value["settlement_bank"]; ?></td>
                                        <td><?php echo $value["account_details"]; ?></td>
                                        <td><?php echo $value["account_balance"]; ?></td>
                                         <td>
                                            <div class="action-btns">
                                               <?php echo $this->Html->link('<button class="btn btn-primary btn-xs bt-action"><i class="fa fa-search"></i></button>', array('controller' => 'aggregates', 'action' => 'aggregatedash', $value['service_id']));
                                                ?> 
                                            </div><!-- action-btns -->
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                               <th>Service id</th>
                                                <th>Merchant id</th>
                                                <th>ServiceName</th>
                                                <th>Report_frequency</th>
                                                <th>Settlement_frequency</th>
                                                <th>ServiceStatus</th>
                                                <th>SettlementMethod</th>
                                                <th>SettlementBank</th>
                                                <th>AccountDetails</th>
                                                <th>AccountBalance</th>
                                                <th>Action#</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>