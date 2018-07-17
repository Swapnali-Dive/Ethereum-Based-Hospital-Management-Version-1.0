pragma solidity ^0.4.23;

contract Hospital {
    
    struct Doctor{
        address doctorId;
        string name;
        string email;
        uint256 contactNumber;
        string doctorAddress;
        string role;        
    }
    
    struct Patient{
        address patientId;
        string name;
        string email;
        uint256 contactNumber;
        string patientAddress;
        string role;
    }
    
    mapping(address => Doctor) doctor;
    mapping(address => Patient) patient;
    address[] public doctors;
    address[] public patients;
    
    mapping(address => address[]) patientList;

    function setDoctor(string _name, string _email, uint _contact, string _doctorAddress) public{
         var newDoctor = doctor[msg.sender];
         
         newDoctor.doctorId = msg.sender;
         newDoctor.name = _name;
         newDoctor.email = _email;
         newDoctor.contactNumber = _contact;
         newDoctor.doctorAddress = _doctorAddress;
         newDoctor.role = "DOCTOR";
         
         doctors.push(msg.sender);
    }
    
    function setPatient(string _name, string _email, uint _contact, string _patientAddress) public{
         var newPatient = patient[msg.sender];
         
         newPatient.patientId = msg.sender;
         newPatient.name = _name;
         newPatient.email = _email;
         newPatient.contactNumber = _contact;
         newPatient.patientAddress = _patientAddress;
         newPatient.role = "PATIENT";
         
         patients.push(msg.sender);
    }
    
    function getDoctor() public view returns (address userId, string name, string email, uint contact, string userAddress)  {
        userId = doctor[msg.sender].doctorId;
        name = doctor[msg.sender].name;
        email = doctor[msg.sender].email;
        contact = doctor[msg.sender].contactNumber;
        userAddress = doctor[msg.sender].doctorAddress;
        
        return (userId,name,email,contact,userAddress);
    }
    
    function getPatient(address _patient) public view returns (address userId, string name, string email, uint contact, string userAddress){
        userId = patient[_patient].patientId;
        name = patient[_patient].name;
        email = patient[_patient].email;
        contact = patient[_patient].contactNumber;
        userAddress = patient[_patient].patientAddress;
        return (userId,name,email,contact,userAddress);
    }

    function shareProfile(address _doctorAddress) public{
         patientList[_doctorAddress].push(msg.sender);
    }
    
    function getPatientList() public view returns (address[]) {
            return patientList[msg.sender];
    }
}