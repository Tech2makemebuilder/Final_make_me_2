$(document).ready(function (){
    $('.edit-data').hide();
});

function edit_profile(obj){
    if(obj.value == 'edit'){
        obj.value = 'save';
        obj.innerHTML = 'Save Profile';
        //$('.edit-data-username').html($('.display-data-username').html()).show().focus();
        //$('.edit-data-fname').html($('.display-data-fname').html()).show().focus();
        //$('.edit-data-lname').html($('.display-data-lname').html()).show().focus();
        //$('.edit-data-email').html($('.display-data-email').html()).show().focus();
        $('.edit-data-address1').html($('.display-data-address1').html()).show().focus();
        $('.edit-data-address2').html($('.display-data-address2').html()).show().focus();
        $('.edit-data-city').html($('.display-data-city').html()).show().focus();
        $('.edit-data-state').html($('.display-data-state').html()).show().focus();
        $('.edit-data-pincode').html($('.display-data-pincode').html()).show().focus();
        $('.edit-data-experience').html($('.display-data-experience').html()).show().focus();
        $('.edit-data-turnover').html($('.display-data-turnover').html()).show().focus();
        $('.edit-data-rera').html($('.display-data-rera').html()).show().focus();
        
        $('.display-data').hide();

        $('.display-data-username').show();
        $('.display-data-fname').show();
        $('.display-data-lname').show();
        $('.display-data-email').show();
    }
    else if(obj.value == 'save'){
        obj.value = 'edit';
        obj.innerHTML = 'Edit Profile';
        // $('.display-data-username').html($('.edit-data-username').val()).show();
        // $('.display-data-fname').html($('.edit-data-fname').val()).show();
        // $('.display-data-lname').html($('.edit-data-lname').val()).show();
        // $('.display-data-email').html($('.edit-data-email').val()).show();
        $('.display-data-address1').html($('.edit-data-address1').val()).show();
        $('.display-data-address2').html($('.edit-data-address2').val()).show();
        $('.display-data-city').html($('.edit-data-city').val()).show();
        $('.display-data-state').html($('.edit-data-state').val()).show();
        $('.display-data-pincode').html($('.edit-data-pincode').val()).show();
        $('.display-data-experience').html($('.edit-data-experience').val()).show();
        $('.display-data-turnover').html($('.edit-data-turnover').val()).show();
        $('.display-data-rera').html($('.edit-data-rera').val()).show();


        $('.edit-data').hide();
    }

}

function addExp(){
    console.log("Here");
    var entry = document.createElement('div');

    var exp_box = 
    `
    <hr style="width:75%" align="center">
    <div class="row">
        <div class="row pl-lg-4 flex-fill mr-lg-3">
            <div class="col">
                <div class="form-group focused">
                    <label class="form-control-label" for="input-username">Position</label>
                    <input type="text" id="input-position" class="form-control form-control-alternative" placeholder="Manager">
                </div>
            </div>
            <div class="col">
                <div class="form-group focused">
                    <label class="form-control-label" for="input-company">Company Name</label>
                    <input type="text" id="input-company" class="form-control form-control-alternative" placeholder="ABC Pvt. Ltd.">
                </div>
            </div>
        </div>    
    
        <div class="row pl-lg-4 flex-fill mr-lg-3">
            <div class="col">
                <div class="form-group focused">
                    <label class="form-control-label" for="input-refName">Reference Name</label>
                    <input type="text" id="input-refName" class="form-control form-control-alternative" placeholder="Mr. Bossman">
                </div>
            </div>
            <div class="col">
                <div class="form-group focused">
                    <label class="form-control-label" for="input-refNum">Reference Contact Number</label>
                    <input type="tel" id="input-refNum" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control form-control-alternative" placeholder="9998887777">
                </div>
            </div>
        </div>
    </div>
    
    `;

    entry.innerHTML = exp_box;
    $('.exp-box').append(entry);
}