$(document).ready(function() {

    var pieData=[];

    
    var DNAData =function()
    {
        

        $.ajax({
             method:'GET',
             url:"/dashboard/dna_bank",
             dataType: 'json',
             success:function(response){

                var ctx = document.getElementById("pie2").getContext('2d');
                data = {
                            datasets: [{
                                backgroundColor:["#F38630","#69D2E7"],
                                data: [response.lcl, response.dna]
                                }],
                            labels: [
                                  'LCL',
                                  'DNA',
                                ],
                              
                        };
                var myPieChart = new Chart(ctx,{
                                        type: 'pie',
                                        data: data,

                                    });
            
             },
             error:function(error)
             {

             }

        });
        
         return true;   
    }

    var tissueData =function()
    {
        
        var tissueData=[];
        var labels =[];
        var colors =[];
        $.ajax({
             method:'GET',
             url:"/dashboard/tissue_type",
             dataType: 'json',
             success:function(response){
                $.each(response,function(key,value){
                   
                    data  = value.count;
                    label = value .tissue_type;
                    color ='#'+(Math.random()*0xFFFFFF<<0).toString(16);
                                  
                    tissueData.push(data);
                    labels.push(label);
                    colors.push(color);

                 });
                              
                var ctx = document.getElementById("pie1").getContext('2d');
              
                data = {
                            datasets: [{
                                backgroundColor:colors,
                                data: tissueData
                                }],
                            labels: labels,
                              
                        };

                var myPieChart = new Chart(ctx,{
                                        type: 'pie',
                                        data: data,

                                    });
                
                   
             },
             error:function(error)
             {

             }

        });
        
         return true;   
    }

    var probandData =function()
    {
        
        var probandData=[''];
        $.ajax({
            method:'GET',
             url:"/dashboard/proband",
             dataType: 'json',
             success:function(response){ 
                var ctx = document.getElementById("pie").getContext('2d');
                data = {
                            datasets: [{
                                backgroundColor:["#FFC0CB","#00FFFF"],
                                data: [response[0].count, response[1].count]
                                }],
                            labels: [
                                  response[0].gender,
                                  response[1].gender,
                                  
                              ],
                              
                        };

                var myPieChart = new Chart(ctx,{
                                        type: 'pie',
                                        data: data,

                                    });

                   
             },
             error:function(error)
             {

             }

        });
        
         return true;   
    }
     
    DNAData();
    tissueData();
    probandData()
});
