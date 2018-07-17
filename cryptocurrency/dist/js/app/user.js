
$(window).on("contractReady", function () {

  setTimeout(function(){           
    getPatientDetails(contract, function(result){ 
      
      $("#currentPatientName").html(result.name);
      $("#currentPatientEmail").html(result.email);
      $("#currentPatientContact").html(result.contact);
      $("#currentPatientAddress").html(result.userAddress);
      $("#currentRole").html(result.userRole);
        
   });

    getDoctorDetails(contract,function(result){
      $("#currentDoctorName").html(result.name);
      $("#currentDoctorEmail").html(result.email);
      $("#currentDoctorContact").html(result.contact);
      $("#currentDoctorAddress").html(result.userAddress);
      $("#currentRole1").html(result.userRole);
    });

    getPatientListDetails(contract,function(result){

    });
  },1000);

});

function submitPatient()
{
  name = $("#p_name").val();
  email = $("#p_email").val();
  contact = $("#p_contact").val();
  userAddress = $("#p_address").val();
  setPatientDetails(contract, name, email, contact, userAddress);
}

function submitDoctor()
{
  name = $("#d_name").val();
  email = $("#d_email").val();
  contact = $("#d_contact").val();
  userAddress = $("#d_address").val();
  setDoctorDetails(contract, name, email, contact, userAddress);
}

function submitProfile()
{
  doctorAddress = $("#doctor_address").val();
  shareProfile(contract, doctorAddress);  
}

function shareProfile(ContractRef, doctorAddress){
   ContractRef.methods.shareProfile(doctorAddress)
   .send({from:coinbase})
   .on('transactionHash',function(hash)
   {
    handleTransactionResponse(hash);
   })
   .on('receipt',function(receipt)
   {
    receiptMessage = "Details Shared Successfully";
    handleTransactionReceipt(receipt,receiptMessage)
   })
   .on('error',function(error)
   {
    handleGenericError(error.message);
    return;   
   }) 
}

function setDoctorDetails(ContractRef, name, email, contact, userAddress)
{
   ContractRef.methods.setDoctor(name, email, contact, userAddress)
   .send({from:coinbase})
   .on('transactionHash',function(hash)
   {
    handleTransactionResponse(hash);
   })
   .on('receipt',function(receipt)
   {
    receiptMessage = "New Doctor Created Successfully";
    handleTransactionReceipt(receipt,receiptMessage)
   })
   .on('error',function(error)
   {
    handleGenericError(error.message);
    return;   
   }) 
}

function setPatientDetails(ContractRef, name, email, contact, userAddress)
{
   ContractRef.methods.setPatient(name, email, contact, userAddress)
   .send({from:coinbase})
   .on('transactionHash',function(hash)
   {
    handleTransactionResponse(hash);
   })
   .on('receipt',function(receipt)
   {
    receiptMessage = "New Patient Created Successfully";
    handleTransactionReceipt(receipt,receiptMessage)
   })
   .on('error',function(error)
   {
    handleGenericError(error.message);
    return;   
   }) 
}

function getPatientList(contractRef,callback)
{
  contractRef.methods.getPatientList().call({from:coinbase})
  .then((result)=>{           
   callback(result);
  })
  .catch((error)=>{
    result = false;
  });
}

function getPatientListDetails(contractRef, callback){

 getPatientList(contract, function(result){

   var addRow = $('#myTable').DataTable();
   j = 1;
   for(i = 0; i < result.length ; i++)
   {
     contractRef.methods.getPatient(result[i]).call()
     .then((result)=>{ 
      addRow.row.add($(
        '<tr>' +
        '<td>'+ j +'</td>' +
        '<td>'+result.userId+'</td>' +
        '<td>'+result.name+'</td>' +
        '<td>'+result.email+'</td>' +
        '<td>'+result.contact+'</td>' +
        '<td>'+result.userAddress+'</td>' +                                
        '</tr>'
        )).draw(false);
      j++;
      callback(result);
    })
     .catch((error)=>{
      result = false;
    });
   }
 });
}

function getPatientDetails(contractRef,callback)
{
  contractRef.methods.getPatient(coinbase).call()
  .then((result)=>{           
   callback(result);
 })
  .catch((error)=>{
    result = false;
  });
}

function getDoctorDetails(contractRef,callback)
{
  contractRef.methods.getDoctor().call({from:coinbase})
  .then((result)=>{           
   callback(result);
 })
  .catch((error)=>{
    result = false;
  });
}

function changeSwitchery(element, checked) {
  if ( ( element.is(':checked') && checked == false ) || ( !element.is(':checked') && checked == true ) ) {
    element.parent().find('.switchery').trigger('click');
  }
}



