<!-- bootstrap datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }} "></script>
<style>
#dropdown-basic {
    left: -152px !important;
    min-width: 223px;
    padding: 0;
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
    line-height: 30px;
}
.top {
    background-color: #D7DCE2;
}
.btn-clear {
    background-color: white;
    color: #7BB16D;
    margin-bottom: 4px;
    margin-top: 4px;
}
.btn-done {
    background-color: #7BB16D;
    color: white;
    margin-bottom: 4px;
    margin-top: 4px;
}
.filterText {
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    padding-top: 6px;
}
span.heading {
    margin-left: 11%;
}
.selectOption {
    width: 100%;
    font-family: 'Montserrat', sans-serif;
    font-size: 10px;
    font-weight: 400;
}
.component-body {
    background-color: #D7DCE2;
    padding-top: 2px;
    padding-bottom: 5px;
}
.inner-input {
    font-weight: 400;
    font-size: 9px;
    border: solid 1px rgb(204, 204, 204);
    padding: 0 5px 0 32%;
    width: 100%;
    height: 20px;
    top: -1px;
    position: relative;
}
.inner-input1 {
    font-weight: 400;
    font-size: 9px;
    border: solid 1px rgb(204, 204, 204);
    padding: 0 5px;
    width: 100%;
    height: 20px;
    top: -1px;
    position: relative;
}
.timeCountInput {
    width: 20%;
    font-family: 'Montserrat', sans-serif;
    font-size: 10px;
    display: inline-block;
    font-weight: 400;
    height: 19px;
    top: -1px;
    position: relative;
}
.select {
    width: 40%;
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    font-weight: 400;
}
.input-group .input-group-addon {
    border-radius: 0;
    border-color: #d2d6de;
    background-color: #fff;
}
</style>
<li>
 <div class="btn-group show" style="display: inline-block!important;" dropdown="">
  <button  class="btn  btn-sm dropdown-toggle" aria-controls="dropdown-basic" dropdowntoggle="" id="button-basic" type="button" aria-haspopup="true" aria-expanded="true">
    <fa class="fa mr-2"><i aria-hidden="true" class="fa fa-filter"></i> </fa>
    Filter 
  </button>
  <!----><div  aria-labelledby="button-basic" class="dropdown-menu " id="dropdown-basic" role="menu" style="left: 0px; right: auto; top: 100%; transform: translateY(0px);display: none;">
    <div class="container-fluid">
       <form method="POST">
      <div class="row top">
        <div class="col-md-4">
          <button class="btn btn-xs btn-clear mt-1 mb-1"> Clear</button>
        </div>
        <div class="col-md-4 text-center filterText">
          Filter
        </div>
        <div class="col-md-4">
          <button type="submit" class="btn btn-xs btn-done mt-1 mb-1">Done</button>
        </div>
      </div>

      <div class="row parent">
        <div class="col-md-12">
          <div class="row component-head">
            <div class="col-md-12">
              <input class="" name="option" type="checkbox"><span class="heading ml-5">Created date</span>
            </div>
          </div>
          <div class="row component-body" style="display: none;">
            <div class="col-md-12">
              <div class="row" style="">
                <div class="col-md-12">
                  <select class="selectOption" data-name="created_at" name="created_at">
                    <option class="" value="[intl]=">is in the last</option>
                    <option  class="" value="[eq]=">is equal to</option>
                    <option  class="" value="between">is between</option>
                    <option  class="" value="[gt]=">is after</option>
                    <option  class="" value="[lt]=">is before</option>
                    <option  class="" value="[lte]=">is before or on</option>
                  </select>
                </div>
              </div>
              <div class="row " style="">
                <div class="col-md-12">
                  <input min="0" class="timeCountInput ml-2" name="created_at[intl]=" type="number" >

                  <select  class="select" name="optionInput">
                  <option  class="" value="day" >Days</option><option class="" value="month">Months</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row parent">
        <div class="col-md-12">
          <div class="row component-head">
            <div  class="col-md-12">
              <input  class="" name="option" type="checkbox"><span  class="heading ml-5">Reason</span>
            </div>
          </div>
          <div  class="row component-body" style="display: none;">
            <div  class="col-md-12">
              <div  class="row" style="">
                <div  class="col-md-12">
                  <select  class="selectOption" data-name="reason[eq]=" name="reason[eq]=">
                  <option  class="" value="duplicate">Duplicate</option>
                  <option  class="" value="fraudulent">Fraudulent</option>
                  <option  class="" value="subscription_canceled">Subscription canceled</option>
                  <option  class="" value="product_unacceptable">Product unacceptable</option>
                  <option  class="" value="product_not_received">Product not received</option>
                  <option  class="" value="unrecognized">Unrecognized</option>
                  <option  class="" value="credit_not_processed">Credit not processed</option>
                  <option  class="" value="incorrect_account_details">Incorrect account details</option>
                  <option  class="" value="insufficient_funds">Insufficient funds</option>
                  <option  class="" value="bank_cannot_process">Bank cannot process</option>
                  <option  class="" value="debit_not_authorized">Debit not authorized</option>
                  <option  class="" value="general">General</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div  class="row parent">
        <div  class="col-md-12">
          <div  class="row">
            <div  class="col-md-12">
              <input  class="" name="option" type="checkbox" ng-reflect-name="option" ng-reflect-model="false"><span  class="heading ml-5">Status</span>
            </div>
          </div>
          <div  class="row component-body ng-trigger ng-trigger-expend" style="display: none;">
            <div  class="col-md-12">
              <div  class="row" style="">
                <div  class="col-md-12">
                  <select  class="selectOption" data-name="status[eq]=" name="status[eq]=">
                  <option  class="" value="closed">Closed</option>
                  <option  class="" value="won">Won</option>
                  <option  class="" value="lost">Lost</option>
                  <option  class="" value="need_response">Needs response</option>
                  <option  class="" value="under_review">Under Review</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><div  class="row parent">
        <div  class="col-md-12">
          <div  class="row">
            <div  class="col-md-12">
              <input  class="" name="option" type="checkbox"><span  class="heading ml-5">Amount</span>
            </div>
          </div>
          <div  class="row component-body" style="display: none;">
            <div  class="col-md-12">
             <div  class="row" style="">
                <div  class="col-md-12">
                  <select  class="selectOption" data-name="amount" name="amount">
                   <option  class="" value="[eq]=">is equal to</option>
                   <option  class="" value="between">is between</option>
                   <option  class="" value="[gt]=">is greater than</option>
                   <option  class="" value="[lt]=">is less than</option>
                  </select>
                </div>
              </div>
            <div  class="row " style="">
                <div  class="col-md-4">
                  <input  class="inner-input" min="0" name="amount[eq]=" type="number">
                </div>
              </div>
            </div>
            <!-- <div class="row" style="">
                <div class="col-md-4">
                  <input class="inner-input" min="0" type="number">
                </div>
                <div class="col-md-2">and</div>
                <div  class="col-md-4">
                  <input class="inner-input" min="0" type="number">
                </div>
            </div> -->
          </div>
        </div>
      </div><div  class="row parent">
        <div  class="col-md-12">
          <div  class="row component-head">
            <div  class="col-md-12">
              <input  class="" name="option" type="checkbox"><span  class="heading ml-5">Dispute date</span>
            </div>
          </div>
          <div  class="row  component-body" style="display: none;">
            <div  class="col-md-12">
             <div  class="row" style="">
                <div  class="col-md-12">
                  <select  class="selectOption" data-name="created_at" name="created_at">
                  <option  class="" value="[intl]=">is in the last</option>
                  <option  class="" value="[eq]=">is equal to</option>
                  <option  class="" value="between">is between</option>
                  <option  class="" value="[gt]=">is after</option>
                  <option  class="" value="[lt]=">is before</option>
                  <option  class="" value="[lte]=">is before or on</option>
                  </select>
                </div>
              </div>
              <div  class="row" style="">
                <div  class="col-md-12">
                  <input  class="timeCountInput ml-2" min="0" name="created_at[intl]=" type="number">

                  <select  class="select " name="optionInput">
                   <option  class="" value="day">Days</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><div  class="row parent ">
        <div  class="col-md-12">
          <div  class="row component-head">
            <div  class="col-md-12">
              <input  class="option" name="option" type="checkbox"><span  class="heading ml-5">Evidence due by</span>
            </div>
          </div>
          <div  class="row component-body" style="display: none;">
            <div  class="col-md-12">
              <div  class="row" style="">
                <div  class="col-md-12">
                  <select  class="selectOption" data-name="reply_by" name="optionInput">
                  <option  class="" value="[intl]=">is in the last</option>
                  <option  class="" value="[eq]=">is equal to</option>
                  <option  class="" value="between">is between</option>
                  <option  class="" value="[gt]=">is after</option>
                  <option  class="" value="[lt]=">is before</option>
                  <option  class="" value="[lte]=">is before or on</option>
                  </select>
                </div>
              </div>
           
           <div  class="row" style="">
                <div  class="col-md-12">
                  <input  class="timeCountInput ml-2" min="0" name="reply_by[intl]=" type="number">

                  <select  class="select " name="optionInput">
                    <option  class="" value="day">Days</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>
</li>
<script>
    $(document).ready(function(){
      $("#button-basic").click(function() {
        $(this).parent().addClass('open');
        $('#dropdown-basic').toggle();
      });
      $(".btn-done").click(function() {
        $('#dropdown-basic').hide();
      });
      $(document).on('change','input[type="checkbox"]',function(){
        if(this.checked) {
          $(this).closest('.parent').addClass('active');
          $(this).parent().parent().next().css("display","block");
        }else{
          $(this).parent().parent().next().css("display","none");
           $(this).closest('.parent').removeClass('active');
        }
      });
      $(document).on('change','#dropdown-basic .container-fluid .row:nth-child(4) .selectOption',function(){
        if($(this).val() == 'between'){
          $(this).parent().parent().next().html('<div class="row"><div class="col-md-4" style="margin-left:15px;margin-right:0px;"><input name="amount[lte]" class="inner-input" min="0" type="number"></div><div class="col-md-2" style="margin-left:1px;margin-right:1px;">and</div><div  class="col-md-4" style="margin-left:0px;"><input name="amount[gte]" class="inner-input" min="0" type="number"></div></div>');
        }/*else if($(this).val() == '[intl]='){
            $(this).parent().parent().next().html('<div class="col-md-12"><input class="timeCountInput ml-2" min="0" name="timeCountInput" type="number"><select class="select " name="optionInput"><option class="" value="day">Days</option></select></div>');
        }*/else{
          $(this).parent().parent().next().html('<div class="row " style=""><div class="col-md-4" style="margin-left:15px;margin-right:0px;"><input class="inner-input" min="0" type="number"></div></div>');
        }
      });

      $(document).on('change','#dropdown-basic .container-fluid .row:nth-child(2) .selectOption, #dropdown-basic .container-fluid .row:nth-child(6) .selectOption',function(){
        if($(this).val() == 'between'){
          $(this).parent().parent().next().html('<div class="row"><div class="col-md-5" style="margin-left: 4%;"><button class="btn btn-xs" style="position: absolute;z-index: 9999;"><i class="fa fa-calendar"></i></button><input name="'+$(this).data("name")+'[lte]" class="inner-input calendar-textbox" type="text"></div><div class="col-md-2" style="margin-left: -7%;margin-right: 3%;">and</div><div  class="col-md-5" style="margin-left: -6%;"><div class="input-group-btn"><button class="btn btn-xs" style="position: absolute;z-index: 9999;"><i class="fa fa-calendar"></i></button></div><input name="'+$(this).data("name")+'[gte]" class="inner-input calendar-textbox" type="text"></div></div>');
        }else if($(this).val() == '[intl]='){
            $(this).parent().parent().next().html('<div class="col-md-12"><input class="timeCountInput ml-2" min="0" name="'+$(this).data("name")+$(this).val()+'" type="number"><select class="select " name="optionInput"><option class="" value="day">Days</option></select></div>');
        }else{
          $(this).parent().parent().next().html('<div class="col-md-12"><div class="input-group add-on date datepicker" data-date-format="yyyy-mm-dd"><div class="input-group-btn"><button class="btn btn-xs"><i class="fa fa-calendar"></i></button></div><input name="'+
              $(this).data("name")+$(this).val()+'" value="" class="inner-input1 calendar-textbox" type="text"></div></div>');
        }
            //Date picker
        $('.calendar-textbox').datepicker({
          autoclose: true
        });
      });

        $(document).on('change','#dropdown-basic .container-fluid .row:nth-child(5) .selectOption',function(){
            if($(this).val() == 'between'){
                $(this).parent().parent().next().html('<div class="row"><div class="col-md-5" style="margin-left: 4%;"><input name="'+$(this).data("name")+'[lte]" class="inner-input" type="text"></div><div class="col-md-2" style="margin-left: -7%;margin-right: 3%;">and</div><div  class="col-md-5" style="margin-left: -6%;"><div class="input-group-btn"></div><input name="'+$(this).data("name")+'[gte]" class="inner-input" type="text"></div></div>');
            }else{
                $(this).parent().parent().next().html('<div class="col-md-12"><div class="input-group"><div class="input-group-btn"></div><input name="'+
              $(this).data("name")+$(this).val()+'" value="" class="inner-input1" type="text"></div></div>');
            }
        });

      $(".btn-clear").click(function(){
        $('input[type=checkbox]').prop('checked', false);
        $('.component-body').css('display', 'none');
        $('input[type=text],input[type=number]').val('');
        $('select').prop('selectedIndex', 0);

      });

      //on click done button to filter
      $('form').on('submit', function (e) {
        var splashArray = [];
         e.preventDefault();
         var panel= $(".active");
          inputs = panel.find("select.selectOption").each(function() {
            //$(this).data("name")+'='+$(this).val();
            //console.log($(this).val());
          if($(this).val() != 'between') {
            var other_than_between = $("input[name*='"+$(this).data("name")+$(this).val()+"']").val();
            if(other_than_between == null){
              other_than_between = '';
            }
            checked_value = $(this).data("name")+$(this).val()+other_than_between;
            
          }else{
            var lte = $("input[name*='"+ $(this).data("name")+"[lte]']").val();
            var gte = $("input[name*='"+ $(this).data("name")+"[gte]']").val();
            checked_value = $(this).data("name")+"[lte]="+ lte +"&"+  $(this).data("name")+"[gte]="+ gte;
          }
          
          splashArray.push(checked_value);
          });

          var custom_url = '';
          $.each(splashArray, function( index, value ) {
            custom_url = custom_url + '&' + value;
          });
          console.log(custom_url);
          $.ajax({
            type: "GET",
            url: "https://staging.payarc.net:9000/api/v1/disputes?limit=20&page=1"+custom_url,
            success: function(data){
               $("#resultarea").text(data);
            }
          });
      });
      
    });


</script>

