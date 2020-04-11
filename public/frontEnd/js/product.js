
 $(document).ready(function (e) {
$('#addFormAction').click(function() {
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var formData = new FormData(); // Currently empty
        formData.append('name', 'PRODUCT');
        var dataObj;
         $.ajax({
                type:'POST',
                url: "/formDefination",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                        if(data[0].name="PRODUCT"){
                         data= JSON.parse(data[0].form_json);
                         let data_1=Object.keys(data);
                         let content="";
                                    let label;
                                    let button_S;
                                    let button_U;
                                    let button_D;
                                    let button_C;
                                    let row=data.row;
                                    let col_num = data.col;
                                    let col = 12/col_num;
                                    let col_1 = 12/data.col_1;
                                    let col_2 =12 - col_1;
                                    label=data_1;
                                    for( var i = 0; i < label.length; i++)
                                    { 
                                            for( var j = i; j < label.length; j++)
                                    { 
                                            if ( label[j].trim() == "col" || label[j].trim() =="col_1" || label[j].trim() =="row" || label[j].trim() =="save" || label[j].trim() =="cancel" || label[j].trim() =="update" || label[j].trim() =="delete") { label.splice(j, 1); }
                                    }
                                    }
                                     
                                    button_S=data.save;
                                    button_U=data.update;
                                    button_D=data.delete;
                                    button_C=data.cancel;
                                    console.log(label);
                                //     console.log(button);
                                    console.log(row);
                                    console.log(col_num);
                                    let k=0;
                                    for(let i=0;i<row;i++)
                                    {
                                            content +="<div class='row'>";
                                                    for(let j=0;j<col_num;j++)
                                                    {
                                                           let label_str=label[k].replace(" ","_")
                                                            content +="<div class='col-sm-"+col+" col-md-"+col+" col-lg-"+col+"'>";
                                                            content +="<div class='row clearfix'>";

                                                            content +="<div class='col-lg-"+col_1+" col-md-"+col_1+" col-sm-"+col_1+" col-xs-"+col_1+" form-control-label'>";
                                                            content +="<label for='"+label_str+"'>"+label[k]+" :</label>";
                                                            content +="</div>";
                                                            content +="<div class='col-lg-"+col_2+" col-md-"+col_2+" col-sm-"+col_2+" col-xs-"+col_2+"'>";
                                                            content +="<div class='form-group'>";
                                                            content +="<div class='form-line'>";
                                                            content +="<input id='"+label_str+"' type='text' placeholder='ENTER "+label[k]+" ' class='form-control @error('email') is-invalid @enderror' name='"+label_str+"' value='' required  autofocus>";
                                                            content +="</div>";
                                                            content +="</div>";

                                                            content +="</div>";
                                                            content +="</div>";
                                                            content +="</div>";
                                                            k++;
                                                    }
                                            content +="</div>";
                                    } 
                                    if(button_S=="Y" || button_U=="Y" || button_D=="Y" || button_C=="Y")  
                                    {
                                     content +="<div class='row'>";

                                                            content +="<div class='col-sm-12 col-md-12 col-lg-12'>";
                                                            content +="<div class='row clearfix'>";

                                                            content +="<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label'>";
                                                           content +="<div class='form-group'>";
                                                            content +="<div class=''>";
                                                            content +="<center>";
                                                            if(button_S=="Y" )
                                                            content +="<button type='submit' class='btn btn-lg btn-primary'>SAVE</button>";
                                                            if(button_U=="Y" )
                                                            content +="<button type='submit' class='btn btn-lg btn-primary'>UPDATE</button>";
                                                            if( button_D=="Y")
                                                            content +="<button type='submit' class='btn btn-lg btn-danger'>DELETE</button>";
                                                            if( button_C=="Y")
                                                            content +="<button class='btn btn-lg btn-danger'>CANCEL</button>";
                                                            content +="</center>";
                                                            content +="</div>";
                                                            content +="</div>";

                                                            content +="</div>";
                                                            content +="</div>";
                                                            content +="</div>";

                                            content +="</div>";                                                              
                                    }
                                $('.addForm').children().remove();     
                                $('.addForm').append(content); 
                         }
                        /// END IF
                },
                error: function(data){
                    console.log(data);
                }
            });
             
                          return false;
            
}); 


 });
