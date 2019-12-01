function getWaitTimes(){
  $("error").html('loading....');
  $.ajax({
    type: "GET",
    url: "https://raw.githubusercontent.com/ValWV/apartments/master/docs/parse/Feed_2.xml",
    dataType: "xml",
    success: function(xml){
      $xml = $(xml);
      $($xml).find('realty-feed>offer').each(function(){
        var id = $(this).attr('internal-id');
        var idType = $(this).find('type').eq(0).text();
        var id2 = $(this).find('ID').eq(1).text();
        var idType2 = $(this).find('Type').eq(1).text();
        var Name = $(this).find('address').text();
        var averageWaitTime = Math.round($(this).find('AverageWaitTime').text()/60);
        var longestWait = Math.round($(this).find('LongestCurrentWaitTime').text()/60);
        var price = $(this).find('price>value').text();
        var readyquarter = $(this).find('ready-quarter').text();
        var area = $(this).find('area>value').text();
        var lspace = $(this).find('living-space>value').text();
        var kspace = $(this).find('kitchen-space>value').text();
        var floor = $(this).find('floor').text();
        var floorstotal = $(this).find('floors-total').text();
        var photo = $(this).find('image[tag="plan"]:first').text();
        var buildingname = $(this).find('building-name').text();
        var buildingsection = $(this).find('building-section').text();
        var builtyear = $(this).find('built-year').text();
        var rooms = $(this).find('rooms').text();
        
        
        var htmlOutPut = ''+
          '<div class="col-md-3" data-id="'+id+'">'+
            '<div class="card card-2" data-toggle="modal" data-target="#item'+id+'">'+
            '<div class="card__top">'+
                      '<img class="card-img-top" style="width:285px; height:250px;" src="'+photo+'">'+
            '</div>'+
            
            '<div class="card__body">'+
              '<h4>'+Name+'</h4>'+
              '<div class="text-info m-b-0">'+price+'RUB</div>'+          
            '</div>'+
            '<div class="card__bottom text-center">'+
            '<div class="card__action">'+
                '<span class="specifiaction text-muted">Срок сдачи</span>'+
                '<div class="m-b-0 font-medium">'+readyquarter+'</div>'+
            '</div>'+
            '<div class="card__action">'+
                '<span class="specifiaction text-muted">Общая площадь</span>'+
                '<div class="m-b-0 font-medium">'+area+'</div>'+
            '</div>'+
            '<div class="card__action">'+
                '<span class="specifiaction text-muted">Жилья площадь</span>'+
                '<div class="m-b-0 font-medium">'+lspace+'</div>'+
            '</div>'+
            '<div class="card__action">'+
                '<span class="specifiaction text-muted">Этаж</span>'+
                '<div class="m-b-0 font-medium">'+floor+'из'+floorstotal+'</div>'+
            '</div>'+
            '</div>'+
         
          '</div>'+
          '<div id="item'+id+'" class="modal fade custom-modal modal5" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">'+
                                    '<div class="modal-dialog modal-lg">'+
                                        '<div class="modal-content">'+  
                                           '<div class="modal-header">'+
                                               '<a href="#" class="close-btn" data-dismiss="modal" aria-hidden="true">×</a>'+
                                            '</div>'+                                                       
                                          '<div class="modal-body p-40 text-justify">'+
                                          '<div class="row">'+
                                            '<div class="col-lg-4 col-md-4">'+ 
                                                 '<img class="rounded img-responsive" src="'+photo+'" alt="">'+
                                            '</div>'+
                                             '<div class="col-lg-8 col-md-8">'+
                                                        '<div class="modal-bg">'+
                                                               '<h4 class="modal-title">АПАРТАМЕНТЫ  ' +buildingname + rooms  +'</h4>'+
                                                    '<div class="row">'+    
                                                         '<div class="col-md-6">'+ 
                                                                '<h5 class="m-b-20 text-uppercase font-semibold">'+ area +'м2</h5>'+           
                                                          '</div>'+
                                                          '<div class="col-md-6">'+ 
                                                                '<h5 class="m-b-20 text-uppercase font-semibold">'+ price +'RUB</h5>'+           
                                                          '</div>'+
                                                     '</div>'+
            
                                                    '<div class="row">'+    
                                                         '<div class="col-md-4">'+ 
                                                                '<h6 class="m-b-20 text-uppercase font-semibold">'+ lspace +'м2</h6>'+           
                                                          '</div>'+
                                                          '<div class="col-md-4">'+ 
                                                                '<h6 class="m-b-20 text-uppercase font-semibold">'+ kspace +'м2</h6>'+           
                                                          '</div>'+
                                                          '<div class="col-md-4">'+ 
                                                                '<h6 class="m-b-20 text-uppercase font-semibold">'+ floor +'</h6>'+           
                                                          '</div>'+
                                                     '</div>'+            
            
                                              '</div>'+
                                            '</div>'+
                                            '</div>'+
                                          '</div>'+
                                      '</div>'+
                                '</div>'+
          
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
