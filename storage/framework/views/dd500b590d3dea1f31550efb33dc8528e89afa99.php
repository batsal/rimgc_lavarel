<?php
$dataFemale = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.gender', 'Female')->count();
$dataMale = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.gender', 'Male')->count();
$dataGenomicYes = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.genomic_data', 'Yes')->count();
$dataGenomicNo = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.genomic_data', NULL)->count();
$_1p = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.tube_type', '1p')->count();
$_1g = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.tube_type', '1g')->count();
$_1y = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.tube_type', '1y')->count();
$_1p1g = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.tube_type', '1p/1g')->count();
$_2p2g = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.tube_type', '2p/2g')->count();
$_2p1g = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.tube_type', '2p/1g')->count();
$_1p2g = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.tube_type', '1p/2g')->count();
$others = DB::table('imgc_medical_patient_info')->where('imgc_medical_patient_info.tube_type', 'other')->count();
$hpo1 = DB::table('rimgc_hpo')->where('rimgc_hpo.hpo_term','Bilateral sensorineural hearing impairment')->count();
$hpo2 = DB::table('rimgc_hpo')->where('rimgc_hpo.hpo_term','Global developmental delay')->count();
$hpo3 = DB::table('rimgc_hpo')->where('rimgc_hpo.hpo_term','Short stature')->count();
$hpo4 = DB::table('rimgc_hpo')->where('rimgc_hpo.hpo_term','Generalized hypotonia')->count();
$hpo5 = DB::table('rimgc_hpo')->where('rimgc_hpo.hpo_term','Failure to thrive')->count();
$hpo6 = DB::table('rimgc_hpo')->where('rimgc_hpo.hpo_term','Microcephaly')->count();
$hpo7 = DB::table('rimgc_hpo')->where('rimgc_hpo.hpo_term','Delayed speech and language development')->count();
$hpo8 = DB::table('rimgc_hpo')->where('rimgc_hpo.hpo_term','Autism')->count();
$hpo9 = DB::table('rimgc_hpo')->where('rimgc_hpo.hpo_term','Muscular hypotonia')->count();
$hpo10 = DB::table('rimgc_hpo')->where('rimgc_hpo.hpo_term','Abnormal facial shape')->count();
?>

<?php $__env->startSection('content'); ?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="page-header"></i> Last updated: Nov 5, 2018</h6>
                    <h3 class="page-header"><i class="icon_piechart"></i> RIMGC Research Samples (Total: 1210)</h3>
                    
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_piechart"></i>Dashboard</li>

                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="container-fluid">
                    <div class="col-lg-6 m-t"></div>
                    <div class="col-lg-6 m-t">
                        <section class="pull-right">
                            <a href="<?php echo e(route('form.create')); ?>" class="btn btn-primary">Enroll New Subjects</a>&nbsp;&nbsp;
                            <a href="<?php echo e(route('form.index')); ?>" class="btn btn-primary">View All enrolled Subjects</a>&nbsp;&nbsp;

                        </section>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- chart morris start -->
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <h3>General Chart</h3>
                        </header>
                        <div class="row">
                                    <!-- Line -->
                                    <div class="col-lg-6">
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Genomic Sample Available
                                            </header>
                                            <div class="panel-body text-center" id="genomic">
                                                <canvas id="pie2" height="300" width="400"></canvas>
                                            </div>
                                        </section>
                                    </div>

                                
                                <!--<div class="row">
                                    <!-- Line -->
                                    <div class="col-lg-6">
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Top 10 Diagnosis
                                            </header>
                                            <div class="panel-body text-center" id="hpo">
                                                <canvas id="pie2" height="300" width="400"></canvas>
                                            </div>
                                        </section>
                                    </div>

                                </div>
                        <div class="panel-body">
                            <div class="tab-pane" id="chartjs">
                                <div class="row">

                                    <!-- Pie -->
                                    <div class="col-lg-6">
                                        <section class="panel">
                                            <header class="panel-heading">
                                                RIMGC Probands
                                            </header>
                                            <div class="panel-body text-center" id="chart">

                                            </div>
                                        </section>
                                    </div>
                                    <!-- Doughnut -->
                                    <div class="col-lg-6">
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Tissue Types
                                            </header>
                                            <div class="panel-body text-center" id="tube">

                                            </div>
                                        </section>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
        </section>
        </div>
        <!-- chart morris start -->
        </div>
    </section>
    <!--main content end-->

    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- chartjs -->
    <script src="<?php echo e(URL::asset('https://code.highcharts.com/highcharts.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('https://code.highcharts.com/modules/data.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('https://code.highcharts.com/modules/drilldown.js')); ?>"></script>
    <script>
        var male1 = '<?php echo $dataMale; ?>';
        var female1 = '<?php echo $dataFemale; ?>';
        var genomic_yes1 = '<?php echo $dataGenomicYes; ?>';
        var genomic_no1 = '<?php echo $dataGenomicNo; ?>';
        // alert(male111);
        var male = parseInt(male1);
        var female = parseInt(female1);
        var genomic_yes = parseInt(genomic_yes1);
        var genomic_no = parseInt(genomic_no1);
        var data_1p = parseInt('<?php echo $_1p; ?>');
        var data_1g = parseInt('<?php echo $_1g; ?>');
        var data_1y = parseInt('<?php echo $_1y; ?>');
        var data_1p1g = parseInt('<?php echo $_1p1g; ?>');
        var data_2p2g = parseInt('<?php echo $_2p2g; ?>');
        var data_2p1g = parseInt('<?php echo $_2p1g; ?>');
        var data_1p2g = parseInt('<?php echo $_1p2g; ?>');
        var others = parseInt('<?php echo $others; ?>');
        var hpo_rank1=parseInt('<?php echo $hpo1; ?>');
        var hpo_rank2=parseInt('<?php echo $hpo2; ?>');
        var hpo_rank3=parseInt('<?php echo $hpo3; ?>');
        var hpo_rank4=parseInt('<?php echo $hpo4; ?>');
        var hpo_rank5=parseInt('<?php echo $hpo5; ?>');
        var hpo_rank6=parseInt('<?php echo $hpo6; ?>');
        var hpo_rank7=parseInt('<?php echo $hpo7; ?>');
        var hpo_rank8=parseInt('<?php echo $hpo8; ?>');
        var hpo_rank9=parseInt('<?php echo $hpo9; ?>');
        var hpo_rank10=parseInt('<?php echo $hpo10; ?>');
        
        // Create the chart
        Highcharts.chart('chart', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Gender distribution among the Probands'
            },
            subtitle: {
                text: null
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}: {point.y}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
            },

            "series": [
                {
                    "name": null,
                    "colorByPoint": true,
                    "data": [
                        {
                            "name": "Male",
                            "y": male,
                            "drilldown": "Male"
                        },
                        {
                            "name": "Female",
                            "y": female,
                            "drilldown": "Female"
                        },

                    ]
                }
            ],
        });
    </script>
    <script>
        Highcharts.setOptions({
        colors: ['#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4']
        });
        Highcharts.chart('genomic', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Genomic Data Available'
            },
            subtitle: {
                text: null
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}: {point.y}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
            },

            "series": [
                {
                    "name": null,
                    "colorByPoint": true,
                    "data": [
                        {
                            "name": "Yes",
                            "y": genomic_yes,
                            "drilldown": "Yes"
                        },
                        {
                            "name": "No",
                            "y": genomic_no,
                            "drilldown": "No"
                        },

                    ]
                }
            ],
        });
    </script>

    <script>

        // Create the chart
        Highcharts.chart('hpo', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Top 10 HPO terms in RIMGC'
            },
            subtitle: {
                text: null
            },
            xAxis: {
                categories: ['Bilateral sensorineural hearing impairment', 'Global developmental delay', 'Short Stature',
                 'Generalized hypotonia', 'Failure to thrive','Microcephaly','Delayed speech and language developmental',
                 'Autism','Muscular hypotonia','Abnormal facial shape'],
                type: 'HPO terms'
            },
            yAxis: {
                title: {
                    text: "Total Numbers"
                }

            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y}'
                    }
                }
            },

            tooltip: {
                headerFormat: null,
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
            },

            "series": [
                {
                    "showInLegend": false, 
                    "name": null,
                    "colorByPoint": true,
                    "data": [
                        {
                            "name": "Bilateral sensorineural hearing impairment",
                            "y": hpo_rank1,
                            "drilldown": "1"
                        },
                        {
                            "name": "Global developmental delay",
                            "y": hpo_rank2,
                            "drilldown": "2"
                        },
                        {
                            "name": "Short Stature",
                            "y": hpo_rank3,
                            "drilldown": "3"
                        },
                        {
                            "name": "Generalized hypotonia",
                            "y": hpo_rank4,
                            "drilldown": "4"
                        },
                        {
                            "name": "Failure to thrive",
                            "y": hpo_rank5,
                            "drilldown": "5"
                        },
                        {
                            "name": "Microcephaly",
                            "y": hpo_rank6,
                            "drilldown": "6"
                        },
                        {
                            "name": "Delayed speech and language developmental",
                            "y": hpo_rank7,
                            "drilldown": "7"
                        },
                        {
                            "name": "Autism",
                            "y": hpo_rank8,
                            "drilldown": "8"
                        },
                        {
                            "name": "Muscular hypotonia",
                            "y": hpo_rank9,
                            "drilldown": "9"
                        },
                        {
                            "name": "Abnormal facial shape",
                            "y": hpo_rank10,
                            "drilldown": "10"
                        }
                    ]
                }
            ]
        });
    </script>



    <script>

        // Create the chart
        Highcharts.chart('tube', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Total numbers of different tube types'
            },
            subtitle: {
                text: null
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Total Number'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
            },

            "series": [
                {
                    "name": "Browsers",
                    "colorByPoint": true,
                    "data": [
                        {
                            "name": "1p",
                            "y": data_1p,
                            "drilldown": "1P"
                        },
                        {
                            "name": "1g",
                            "y": data_1g,
                            "drilldown": "1g"
                        },
                        {
                            "name": "1y",
                            "y": data_1y,
                            "drilldown": "1y"
                        },
                        {
                            "name": "1p/1g",
                            "y": data_1p1g,
                            "drilldown": "1p/1g"
                        },
                        {
                            "name": "2p/2g",
                            "y": data_2p2g,
                            "drilldown": "2p/2g"
                        },
                        {
                            "name": "2p/1g",
                            "y": data_2p1g,
                            "drilldown": "2p/1g"
                        },
                        {
                            "name": "1p/2g",
                            "y": data_1p2g,
                            "drilldown": "1p/2g"
                        },
                        {
                            "name": "Other",
                            "y": others,
                            "drilldown": "others"
                        }
                    ]
                }
            ]
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>