	var coinbase, 		
		contract;

	var contractAddress = {
		'hospital': "0x2ad55d3ae2b8690273221361e1148a844b81362c"		
	};	

	function handleGenericError(error_message)
	{
	    if(error_message.includes("MetaMask Tx Signature"))
	    {
	        sweetAlert("Error", "Transaction Refused ", "error");
	    }
	    else
	    {
	        // sweetAlert("Error", "Error Occured, Please Try Again , if problem persist get in touch with us. ", "error");
	        sweetAlert("Error", error_message, "error");
	    }
	}

	function handleTransactionReceipt(receipt,finalMessage)
	{
		$("#linkOngoingTransaction").html("");
        $("#divOngoingTransaction").fadeOut();

        // sweetAlert("Success", "Token Purchase Complete ", "success");
        sweetAlert("Success", finalMessage, "success");
	}

	function handleTransactionResponse(txHash,finalMessage)
	{
		var txLink = "https://rinkeby.etherscan.io/tx/" + txHash ;
	    var txLinkHref = "<a target='_blank' href='"+txLink+"'> Click here for Transaction Status </a>" ;

	    sweetAlert("Success", "Please Check Transaction Status here :  "+txLinkHref, "success");

	    $("#linkOngoingTransaction").html(txLinkHref);
	    $("#divOngoingTransaction").fadeIn();
	}
	
	
	window.addEventListener('load', function() {    
		/*
		* Initialize Provider
		*/
		if (typeof web3 !== 'undefined') {
		  web3 = new Web3(web3.currentProvider);
		} else {
		  // set the provider you want from Web3.providers
		  web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
		}

		initContract();

		setInterval(function(){
			validateNetwork();
			updateAccountLoginStatus();	
		},500);			

	});

	function validateNetwork()
	{
		web3.eth.net.getId(function (error, networkId) {
			if (networkId != 4) {
				sweetAlert("Error","Please Switch to Rinkeby Network","error");
			}
		});
	}

	function initContract()
	{
		/*
		 * Initialize contract with web3
		 */
		contract = new web3.eth.Contract( hospitalAbi ,contractAddress.hospital);
		
		$(window).trigger("contractReady");		

		contract.events.allEvents((error,data) => {
			//console.log(error);
			//console.log(data);
		})		
	}

	function updateAccountLoginStatus(){
		web3.eth.getAccounts(function(err, accounts)
		{
		    if (err){
				console.error("An error occurred: " + err);
			} 
		    else if (accounts.length == 0){
		     	// sweetAlert('Error', 'Please login to MetaMask..!', 'error');
		     	window.location = 'index.php';
		     	// $("#currentUserAddress").html('').html("0x0000000000000000000000000000000000000000");
			}
			else{
		    	initAccountDetails();
		    }	
		});
	}

	
	function initAccountDetails(){
		/*
		* Get Current wallet account address
		*/
		getCurrentAccountAddress((address)=>{
			coinbase = address;	
			$("#currentUserAddress").html(coinbase);
		});
	
		/*
		* Get Current wallet account Ether Balance
		*/

		getAccountBalance(coinbase,function(balance)
		{
			$("#accountBalance").html(toEther(balance) + ' ETH');
		});
	}

	function getAccountBalance(coinbase,callback)
	{	
		coinbase = coinbase || false;
		callback = callback || false;

		if(!coinbase) 
		{
			callback(0);
			return;
		}

		web3.eth.getBalance(coinbase)
		.then((balance) => {
			callback(balance);
		})
		.catch((err) => {
			// sweetAlert("Error","Unable to Get User Balance at the moment for : " + coinbase,"error");
			if(callback)
			{
				callback(0);
			}
		});
	}

	function getCurrentAccountAddress(callback){
		callback = callback || false;

		web3.eth.getCoinbase()
		.then((_coinbase) => {
			callback(_coinbase);
		})
		.catch((err)=>{
			// sweetAlert("Error","Unable to get Current Account Address");
			if(callback)
			{
				callback(0);
			}
		});
	}


	function toEther(_val) {
		_val = String(_val);

		return web3.utils.fromWei(_val, "ether");
	}

	function toWei(_val) {

		_val = String(_val);
		return web3.utils.toWei(_val, "ether");
	}

	function toDate(_timestamp) {

		var currentDate = new Date(_timestamp * 1000);
		var formattedDate = currentDate.toLocaleString(undefined, {
														day: 'numeric',
														month: 'numeric',
														year: 'numeric'
													});
		return formattedDate;
	}
