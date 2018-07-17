# Ethereum-Based-Hospital-Management-Version-1.0
This Application is a Simple Hospital Management System where Patient and Doctors can register themselves. Patients can share their profile with doctors from whome they want to get consulted and treated. 

---
# Key Functions and Modules
1) There will be Two Users
- Doctor
- Patient
2) Patient can view his/her information
3) Doctor can view/her information
4) Patient can share his/her information with Doctors
5) Doctors can view all/limited information of Patients who shared their information with doctors
---
# Technology Stack
- Ethereum Blockchain – Rinkeby Test network
    - Remix and Metamask is used for deployment of smart contracts
- Front End is designed Using Apache PHP and Javascript 
- Web3 JS is used communicate between smart contracts and front end developing 
- Solidity (Ethereum)
- Metamask (Ethereum Wallet)
---
# Prerequisites
- Nodejs v9.10 or above
- Solidity v0.4.23
- Metamask (https://metamask.io)
- Apache PHP 
---
# Deployment Steps
```shell
git clone https://github.com/Swapnali-Dive/Ethereum-Based-Hospital-Management-Version-1.0.git

cd Ethereum-Based-Hospital-Management-Version-1.0
```

- Copy Code From hostpital_contact directory and paste it in Remix-Solidity IDE

- Deploy Hospital.sol Smart contact using Injected Web3 which should be linked to your Metamask Wallet with Rinkeby Network

Copy the contract address and paste it into dist/js/app.js as shown below
```javascript
	var coinbase, 		
		contract;
		
	var contractAddress = {
		'hospital': "0x2ad55d3ae2b8690273221361e1148a......" // paste your contract address here
	};	
```
- Copy Smart Contract's ABI from Remix-Solidity IDE and paste it into dist/js/abi/hospitalAbi.js 

---
## Application Screen's

**Login**
![Login page](../master/assets/images/screens/Login.png)
---
**Registration**
![Registration page](../master/assets/images/screens/Registration.png)
---
**Patient's Dashboard**
![Patient's Dashboard](../master/assets/images/screens/PatientsDashboard.png)

---
**Patient Share Profile with Doctors**
![Sharing Profile](../master/assets/images/screens/SharingProfile.png)

---
**Doctor's Dashboard**
![Doctor's Dashboard](../master/assets/images/screens/DoctorsDashboard.png)

---





