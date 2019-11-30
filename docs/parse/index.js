function getWaitTimes(){
  $("error").html('loading....');
  $.ajax({
    type: "GET",
    url: "https://raw.githubusercontent.com/ValWV/apartments/master/docs/parse/Feed_2.xml",
    dataType: "xml",
    success: function(xml){
      $xml = $(xml);
      $($xml).find('realty-feed>offer').each(function(){
        var id = $(this).find('id').eq(0).text();
        var idType = $(this).find('type').eq(0).text();
        var id2 = $(this).find('ID').eq(1).text();
        var idType2 = $(this).find('Type').eq(1).text();
        var Name = $(this).find('address').text();
        var averageWaitTime = Math.round($(this).find('AverageWaitTime').text()/60);
        var longestWait = Math.round($(this).find('LongestCurrentWaitTime').text()/60);
        var price = $(this).find('price').text();
        var totalPatients = $(this).find('image[tag="plan"]:first').text();
        var htmlOutPut = ''+
          '<div class="col-md-3 card card-shadow">'+
            '<div class="card__top">'+
                      '<img class="card-img-top" src="'+totalPatients+'">'+
            '</div>'+
            '<h4>'+Name+'</h4>'+
            '<div class="card__body">'+
              '<h5 data-animation="animated flipInX" class="m-b-10 m-t-0">'+price+'</h5>'+
              '<div class="text-info m-b-0">'+longestWait+'</div>'+
              '<div class="waitTimes__minutes">minutes</div>'+              
            '</div>'+
            '<div class="waitTimes__other">id: '+id+'</div>'+
            '<div class="waitTimes__other">id type: '+idType+'</div>'+
            '<div class="waitTimes__other">id2: '+id2+'</div>'+
            '<div class="waitTimes__other">id type2: '+idType2+'</div>'+
            '<div class="bg-light slide-content specifiaction-box"> <div class="row"> '+
            '<div class="col-6">longest wait: '+longestWait+'</div>'+
            '<div class="col-6">patients waiting: '+patientsWaiting+'</div></div></div>'+
            
          '</div>'+
        '';
        $('.data__sims').append(htmlOutPut);
      });
    },
    error: function(err){
      $('.error').html('error: '+err);
    }
  });
}

$(document).ready(function() {
  getWaitTimes();
});
