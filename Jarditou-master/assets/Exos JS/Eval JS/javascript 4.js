// let N = 0;

function getInteger(message)
    {
        let N = 0;
        while (N == 0 || Number.isNaN(N))
        {
        N = parseInt(prompt(message));
        }
        return N;
    }


	let PU = getInteger("Prix Unitaire");

	let QTECOM = getInteger("Quantité commandée");
	
	let REM = 0;
	
	let PORT = 0;
	
	let TOT = 0;
	TOT = PU*QTECOM;
	
	let TOTREM =0;	

	let PAP = 0;


	if (TOT>100 && TOT<=200)
	{
		REM = (5/100)*TOT;
	}
	else if (TOT>200)
	{
		REM = (10/100)*TOT;
	}

TOTREM = TOT - REM;
console.log("TOTREM "+TOTREM);

	if (TOTREM>500)
	{
		PORT = 0;
	}
	else if (TOTREM<=500)
	{
		PORT = 2/100*TOTREM;

		if (PORT<=6)
		{
			PORT = 6;
		}
	}
console.log("PORT "+PORT);

PAP = TOTREM + PORT;


alert("Prix à  payer : " + PAP.toFixed(2));
console.log("Prix à  payer : " + PAP.toFixed(2));