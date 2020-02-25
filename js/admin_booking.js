// JavaScript Document
function cal_total_booking_price(RoomCount,nServiceChargeRate,nHotelTaxRate,nPaypalFeeRate,strPaymentType,nSinglePackagePrice){
 
	var total_price 		= 0;
	var ServiceChargeAmt 	= 0 ;
	var HotelTaxAmt 		= 0 ;
	var TotalPriceWT		= 0 ;
	var nCount = Number(RoomCount);
	var PaypalFeeAmt		= 0 ;
	var	NetPrice 			= 0 ;
	
   
	for (i = 1; i <= nCount; i++) { 
		//alert('total_room_price '+String(i)+'='+document.getElementById('total_room_price'+String(i)).value);
		total_price  = total_price+ Number(document.getElementById('total_room_price'+String(i)).value) ; 
		 
	}
	total_price  		=   total_price + Number(nSinglePackagePrice);
	
	ServiceChargeAmt 	= 	total_price * nServiceChargeRate/100 ;
	ServiceChargeAmt	=	Number(ServiceChargeAmt.toFixed(2));
	HotelTaxAmt			= 	((total_price +  ServiceChargeAmt ) * ( nHotelTaxRate /100)) ;
	HotelTaxAmt			=	Number(HotelTaxAmt.toFixed(2));
	//TotalPriceWT		= 	total_price+HotelTaxAmt+ServiceChargeAmt;
	TotalPriceWT		= 	total_price+ServiceChargeAmt;
	TotalPriceWT		=	Number(TotalPriceWT.toFixed(2));
	
	if( strPaymentType =='Paypal'){
		PaypalFeeAmt		=   TotalPriceWT*nPaypalFeeRate/100 ;
	}else{
		PaypalFeeAmt		=	0;
	}	
	PaypalFeeAmt		=   Number(PaypalFeeAmt.toFixed(2));
	NetPrice			=   TotalPriceWT + PaypalFeeAmt;
	NetPrice			=   Number(NetPrice.toFixed(2));
 	
 
    if(Number(nSinglePackagePrice)> 0 ){
			document.getElementById('lb_room_price1').innerHTML =  toCurrency(total_price) +' &nbsp;';
	} 	
	
	
	document.getElementById('TotalPrice').value = total_price;
	document.getElementById('lbTotalPrice').innerHTML = toCurrency(total_price) +' &nbsp;';

	document.getElementById('ServiceChargeAmt').value = ServiceChargeAmt;
	document.getElementById('lbServiceCharge').innerHTML = toCurrency(ServiceChargeAmt) +' &nbsp;';
	document.getElementById('HotelTaxAmt').value = HotelTaxAmt;
	//document.getElementById('lbHotelTax').innerHTML = toCurrency(HotelTaxAmt) +' &nbsp;';
	document.getElementById('TotalPriceWT').value = TotalPriceWT;
	document.getElementById('lbTotalPriceWT').innerHTML = toCurrency(TotalPriceWT) +' &nbsp;';
	
	document.getElementById('PaypalFeeAmt').value = PaypalFeeAmt;
	document.getElementById('lbPaypal_Fee').innerHTML = toCurrency(PaypalFeeAmt) +' &nbsp;';
	
	document.getElementById('NetPrice').value = NetPrice;
	document.getElementById('lbNetPrice').innerHTML = toCurrency(NetPrice) +' &nbsp;';
 
	
}

function cal_package_price(){

	 
	/*-------------------------------- Cal  Total Booking Price  ----------------------------------*/
	cal_total_booking_price(document.getElementById('room_count').value,document.getElementById('ServiceChargeRate').value,document.getElementById('HotelTaxRate').value,document.getElementById('PaypalFeeRate').value,document.getElementById('payment_type').value,document.getElementById('single_package_rate').value );

}