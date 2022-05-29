<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style id="applicationStylesheet" type="text/css">
        @media print {
            body {zoom: 145%;}
            table {page-break-inside: avoid;}
        }
        #Description_p {
            left: 16.419px;
            z-index: 99;
            top: 42.937px;
            position: absolute;
            overflow: visible;
            width: 74px;
            white-space: nowrap;
            line-height: 14.752079963684082px;
            margin-top: -1.376039981842041px;
            text-align: left;
            font-family: Montserrat-Bold, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            color: #000000;
        }
        #AmountP {
            left: 363.314px;
            top: 46.937px;
            position: absolute;
            overflow: visible;
            width: 53px;
            white-space: nowrap;
            line-height: 14.752079963684082px;
            margin-top: -1.376039981842041px;
            text-align: left;
            font-family: Montserrat-Bold, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            color: #000000;
            z-index: 99;
        }
        .mediaViewInfo {
            --web-view-name: Invoice;
            --web-view-id: Invoice;
            --web-scale-on-resize: true;
            --web-enable-deep-linking: true;
        }
        :root {
            --web-view-ids: Invoice;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
        }
        #Invoice {
            position: absolute;
            width: 591.27px;
            height: 836.689px;
            background-color: rgba(255,255,255,1);
            overflow: hidden;
            --web-view-name: Invoice;
            --web-view-id: Invoice;
            --web-scale-on-resize: true;
            --web-enable-deep-linking: true;
        }
        #Rectangle_38 {
            fill: rgba(255,255,255,1);
        }
        .Rectangle_38 {
            position: absolute;
            overflow: visible;
            width: 591px;
            height: 837px;
            left: 0;
            top: 0;
        }
        #Billing_From {
            position: absolute;
            width: 224.65px;
            height: 117.071px;
            left: 44px;
            top: 174.78px;
            overflow: visible;
        }
        #Billing_From_i {
            left: 0;
            top: 0;
            position: absolute;
            overflow: visible;
            width: 84px;
            white-space: nowrap;
            line-height: 15.288360595703125px;
            margin-top: -1.1441802978515625px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 13px;
            color: rgba(142,35,24,1);
        }
        #SKY_HEIGHTS_REAL_ESTATE_LIMITE {
            left: 0.65px;
            top: 20.11px;
            position: absolute;
            overflow: visible;
            width: 225px;
            white-space: nowrap;
            line-height: 14.014321327209473px;
            margin-top: -1.0071606636047363px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            color: rgba(26,24,24,1);
        }
        #Address-House_2_Road_8_Block_D {
            left: 0.65px;
            top: 41.11px;
            position: absolute;
            overflow: visible;
            width: 223px;
            white-space: nowrap;
            line-height: 10.19219970703125px;
            margin-top: -0.096099853515625px;
            text-align: left;
            font-family: Montserrat-Regular;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
            letter-spacing: -0.04px;
        }
        #Rampura_Dhaka-1219_Bangladesh {
            left: 0.65px;
            top: 56.851px;
            position: absolute;
            overflow: visible;
            width: 175px;
            white-space: nowrap;
            line-height: 10.19219970703125px;
            margin-top: -0.096099853515625px;
            text-align: left;
            font-family: Montserrat-Regular;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
            letter-spacing: -0.04px;
        }
        #Mobile_8801312570561____880131 {
            left: 0.65px;
            top: 72.591px;
            position: absolute;
            overflow: visible;
            width: 213px;
            white-space: nowrap;
            line-height: 10.19219970703125px;
            margin-top: -0.096099853515625px;
            text-align: left;
            font-family: Montserrat-Regular;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
        }
        #Email_skyheightsltdgmailcom {
            left: 0.65px;
            top: 88.331px;
            position: absolute;
            overflow: visible;
            width: 165px;
            white-space: nowrap;
            line-height: 10.19219970703125px;
            margin-top: -0.096099853515625px;
            text-align: left;
            font-family: Montserrat-Regular;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
        }
        #Website_www_xyzcom {
            left: 0.65px;
            top: 104.071px;
            position: absolute;
            overflow: visible;
            width: 115px;
            white-space: nowrap;
            line-height: 10.19219970703125px;
            margin-top: -0.096099853515625px;
            text-align: left;
            font-family: Montserrat-Regular;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
            letter-spacing: -0.55px;
        }
        #Invoice_No {
            position: absolute;
            width: 95px;
            height: 35.11px;
            left: 451.885px;
            top: 174.78px;
            overflow: visible;
        }
        #Invoice_No_q {
            left: 20.115px;
            top: 0px;
            position: absolute;
            overflow: visible;
            width: 75px;
            white-space: nowrap;
            line-height: 15.288360595703125px;
            margin-top: -1.1441802978515625px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 13px;
            color: rgba(142,35,24,1);
        }
        #n_0220324-004 {
            left: 0px;
            top: 20.11px;
            position: absolute;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 14.014321327209473px;
            margin-top: -2.5071606636047363px;
            text-align: left;
            font-family: Montserrat;
            font-style: normal;
            font-weight: bold;
            font-size: 9px;
            color: rgba(26,24,24,1);
            letter-spacing: -0.02px;
        }
        #Invoice_Date {
            position: absolute;
            width: 85.038px;
            height: 35.11px;
            left: 462.006px;
            top: 230.065px;
            overflow: visible;
        }
        #Invoice_Date_t {
            left: 0px;
            top: 0px;
            position: absolute;
            overflow: visible;
            width: 85px;
            white-space: nowrap;
            line-height: 15.288360595703125px;
            margin-top: -1.1441802978515625px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 13px;
            color: rgba(142,35,24,1);
        }
        #n_4032022 {
            left: 16.038px;
            top: 20.11px;
            position: absolute;
            overflow: visible;
            width: 70px;
            white-space: nowrap;
            line-height: 14.014321327209473px;
            margin-top: -1.0071606636047363px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            color: rgba(26,24,24,1);
            letter-spacing: -0.09px;
        }
        #Received_From {
            position: absolute;
            width: 119px;
            height: 54.11px;
            left: 44.909px;
            top: 308.894px;
            overflow: visible;
        }
        #Received_From_w {
            left: 0px;
            top: 0px;
            position: absolute;
            overflow: visible;
            width: 102px;
            white-space: nowrap;
            line-height: 15.288360595703125px;
            margin-top: -1.1441802978515625px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 13px;
            color: rgba(142,35,24,1);
        }
        #Sheikh_Raiyan_Huq {
            left: 0px;
            top: 20.11px;
            position: absolute;
            overflow: visible;
            width: 120px;
            white-space: nowrap;
            line-height: 14.014321327209473px;
            margin-top: -1.0071606636047363px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            color: rgba(26,24,24,1);
        }
        #n_1771572473 {
            left: 0px;
            top: 41.11px;
            position: absolute;
            overflow: visible;
            width: 60px;
            white-space: nowrap;
            line-height: 10.19219970703125px;
            margin-top: -0.096099853515625px;
            text-align: left;
            font-family: Montserrat-Regular;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
            letter-spacing: -0.01px;
        }
        #Acount_Head {
            position: absolute;
            width: 122px;
            height: 54.11px;
            left: 44px;
            top: 380.046px;
            overflow: visible;
        }
        #Account_Head {
            left: 0px;
            top: 0px;
            position: absolute;
            overflow: visible;
            width: 97px;
            white-space: nowrap;
            line-height: 15.288360595703125px;
            margin-top: -1.1441802978515625px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 13px;
            color: rgba(142,35,24,1);
            letter-spacing: -0.04px;
        }
        #Raiyan_Sheikh__Huq {
            left: 0px;
            top: 20.11px;
            position: absolute;
            overflow: visible;
            width: 123px;
            white-space: nowrap;
            line-height: 14.014321327209473px;
            margin-top: -1.0071606636047363px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            color: rgba(26,24,24,1);
            letter-spacing: -0.04px;
        }
        #n_1771573442 {
            left: 0px;
            top: 41.11px;
            position: absolute;
            overflow: visible;
            width: 62px;
            white-space: nowrap;
            line-height: 10.19219970703125px;
            margin-top: -0.096099853515625px;
            text-align: left;
            font-family: Montserrat-Regular;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
            letter-spacing: -0.01px;
        }
        #Payment_Method {
            position: absolute;
            width: 109px;
            height: 33px;
            left: 43.95px;
            top: 600.814px;
            overflow: visible;
        }
        #Payment_Method_ {
            left: 0px;
            top: 0px;
            position: absolute;
            overflow: visible;
            width: 110px;
            white-space: nowrap;
            line-height: 14.40000057220459px;
            margin-top: -1.200000286102295px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            color: rgba(142,35,24,1);
            letter-spacing: -0.15px;
        }
        #CHEQUE {
            left: 0px;
            top: 19px;
            position: absolute;
            overflow: visible;
            width: 51px;
            white-space: nowrap;
            line-height: 13.200000762939453px;
            margin-top: -1.1000003814697266px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 11px;
            color: rgba(26,24,24,1);
        }
        #Taka_Received_by {
            position: absolute;
            width: 147.003px;
            height: 14px;
            left: 44.335px;
            top: 580.424px;
            overflow: visible;
        }
        #Taka_received_by {
            left: 0px;
            top: 0px;
            position: absolute;
            overflow: visible;
            width: 91px;
            white-space: nowrap;
            line-height: 13.200000762939453px;
            margin-top: -1.1000003814697266px;
            text-align: left;
            font-family: Montserrat-Regular;
            font-style: normal;
            font-weight: normal;
            font-size: 11px;
            color: rgba(26,24,24,1);
            letter-spacing: -0.28px;
        }
        #n_test_user {
            left: 91.003px;
            top: 0px;
            position: absolute;
            overflow: visible;
            width: 57px;
            white-space: nowrap;
            line-height: 13.200000762939453px;
            margin-top: -1.1000003814697266px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 11px;
            color: rgba(26,24,24,1);
        }
        #Signature {
            position: absolute;
            width: 502.033px;
            height: 111.393px;
            left: 44.5px;
            top: 652.433px;
            overflow: visible;
        }
        #Thank_you_for_your_business {
            left: 155.166px;
            top: 0px;
            position: absolute;
            overflow: visible;
            width: 192px;
            white-space: nowrap;
            line-height: 15.600000381469727px;
            margin-top: -1.3000001907348633px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 13px;
            color: rgba(216,100,24,1);
        }
        #Chief_Accountant {
            left: 398.843px;
            top: 91.647px;
            position: absolute;
            overflow: visible;
            width: 92px;
            white-space: nowrap;
            line-height: 13.200000762939453px;
            margin-top: -1.6000003814697266px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
        }
        #Managing_Director {
            left: 267.343px;
            top: 91.647px;
            position: absolute;
            overflow: visible;
            width: 99px;
            white-space: nowrap;
            line-height: 13.200000762939453px;
            margin-top: -1.6000003814697266px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
        }
        #Chairman {
            left: 161.843px;
            top: 91.647px;
            position: absolute;
            overflow: visible;
            width: 52px;
            white-space: nowrap;
            line-height: 13.200000762939453px;
            margin-top: -1.6000003814697266px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
        }
        #Rectangle_32 {
            fill: rgba(216,100,24,1);
        }
        .Rectangle_32 {
            position: absolute;
            overflow: visible;
            width: 191.449px;
            height: 0.882px;
            left: 155.348px;
            top: 20.268px;
        }
        #Receiver_Signature {
            left: 8.5px;
            top: 91.647px;
            position: absolute;
            overflow: visible;
            width: 100px;
            white-space: nowrap;
            line-height: 13px;
            margin-top: -1.5px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            color: rgba(26,24,24,1);
        }
        #Rectangle_33 {
            fill: rgba(0,0,0,0);
            stroke: rgba(213,99,25,1);
            stroke-width: 1px;
            stroke-linejoin: miter;
            stroke-linecap: butt;
            stroke-miterlimit: 10;
            shape-rendering: auto;
        }
        .Rectangle_33 {
            position: absolute;
            overflow: visible;
            width: 117.686px;
            height: 67.897px;
            left: 0px;
            top: 44.496px;
        }
        #Rectangle_26 {
            fill: rgba(213,99,25,1);
        }
        .Rectangle_26 {
            position: absolute;
            overflow: visible;
            width: 116.69px;
            height: 0.882px;
            left: 0.343px;
            top: 85.956px;
        }
        #Rectangle_39 {
            fill: rgba(0,0,0,0);
            stroke: rgba(213,99,25,1);
            stroke-width: 1px;
            stroke-linejoin: miter;
            stroke-linecap: butt;
            stroke-miterlimit: 10;
            shape-rendering: auto;
        }
        .Rectangle_39 {
            position: absolute;
            overflow: visible;
            width: 116.686px;
            height: 67.897px;
            left: 129px;
            top: 44.496px;
        }
        #Rectangle_40 {
            fill: rgba(213,99,25,1);
        }
        .Rectangle_40 {
            position: absolute;
            overflow: visible;
            width: 115.69px;
            height: 0.882px;
            left: 129.343px;
            top: 85.956px;
        }
        #Rectangle_41 {
            fill: rgba(0,0,0,0);
            stroke: rgba(213,99,25,1);
            stroke-width: 1px;
            stroke-linejoin: miter;
            stroke-linecap: butt;
            stroke-miterlimit: 10;
            shape-rendering: auto;
        }
        .Rectangle_41 {
            position: absolute;
            overflow: visible;
            width: 117.686px;
            height: 67.897px;
            left: 257px;
            top: 44.496px;
        }
        #Rectangle_42 {
            fill: rgba(213,99,25,1);
        }
        .Rectangle_42 {
            position: absolute;
            overflow: visible;
            width: 116.343px;
            height: 0.882px;
            left: 257.343px;
            top: 85.956px;
        }
        #Rectangle_43 {
            fill: rgba(0,0,0,0);
            stroke: rgba(213,99,25,1);
            stroke-width: 1px;
            stroke-linejoin: miter;
            stroke-linecap: butt;
            stroke-miterlimit: 10;
            shape-rendering: auto;
        }
        .Rectangle_43 {
            position: absolute;
            overflow: visible;
            width: 116.686px;
            height: 67.897px;
            left: 386px;
            top: 44.496px;
        }
        #Rectangle_44 {
            fill: rgba(213,99,25,1);
        }
        .Rectangle_44 {
            position: absolute;
            overflow: visible;
            width: 115.69px;
            height: 0.882px;
            left: 386.343px;
            top: 85.956px;
        }
        #Header {
            position: absolute;
            width: 592px;
            height: 27.774px;
            left: 0px;
            top: 126.319px;
            overflow: visible;
        }
        #Rectangle_7 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_7 {
            position: absolute;
            overflow: visible;
            width: 3.697px;
            height: 26.652px;
            left: 237.068px;
            top: 0px;
        }
        #Path_1 {
            fill: rgba(142,35,24,1);
        }
        .Path_1 {
            overflow: visible;
            position: absolute;
            width: 17.627px;
            height: 26.652px;
            left: 246.203px;
            top: 0px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_2 {
            fill: rgba(142,35,24,1);
        }
        .Path_2 {
            overflow: visible;
            position: absolute;
            width: 19.605px;
            height: 26.652px;
            left: 266.887px;
            top: 0px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_3 {
            fill: rgba(142,35,24,1);
        }
        .Path_3 {
            overflow: visible;
            position: absolute;
            width: 17.884px;
            height: 27.419px;
            left: 288.357px;
            top: 0.355px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Rectangle_8 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_8 {
            position: absolute;
            overflow: visible;
            width: 3.697px;
            height: 26.652px;
            left: 310.765px;
            top: 0.738px;
        }
        #Rectangle_46 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_46 {
            position: absolute;
            overflow: visible;
            width: 221px;
            height: 26px;
            left: 0px;
            top: 0.681px;
        }
        #Rectangle_47 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_47 {
            position: absolute;
            overflow: visible;
            width: 222px;
            height: 26px;
            left: 370px;
            top: 0.681px;
        }
        #Path_4 {
            fill: rgba(142,35,24,1);
        }
        .Path_4 {
            overflow: visible;
            position: absolute;
            width: 16.676px;
            height: 27.42px;
            left: 319.036px;
            top: 0.354px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_5 {
            fill: rgba(142,35,24,1);
        }
        .Path_5 {
            overflow: visible;
            position: absolute;
            width: 15.173px;
            height: 26.651px;
            left: 339.74px;
            top: 0.738px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Description {
            position: absolute;
            width: 502.528px;
            height: 111.622px;
            left: 44.472px;
            top: 452px;
            overflow: visible;
        }
        #Rectangle_45 {
            fill: rgba(240,240,240,1);
        }
        .Rectangle_45 {
            position: absolute;
            overflow: visible;
            width: 502px;
            height: 27px;
            left: 0.528px;
            top: 0px;
        }
        #Rectangle_1 {
            fill: transparent;
            stroke: rgba(216,103,29,1);
            stroke-width: 1px;
            stroke-linejoin: miter;
            stroke-linecap: butt;
            stroke-miterlimit: 4;
            shape-rendering: auto;
        }
        .Rectangle_1 {
            position: absolute;
            overflow: visible;
            width: 503.339px;
            height: 85.916px;
            left: 0px;
            top: 26.705px;
        }
        #Rectangle_2 {
            fill: transparent;
            stroke: rgba(216,103,29,1);
            stroke-width: 1px;
            stroke-linejoin: miter;
            stroke-linecap: butt;
            stroke-miterlimit: 4;
            shape-rendering: auto;
        }
        .Rectangle_2 {
            position: absolute;
            overflow: visible;
            width: 503.339px;
            height: 27.696px;
            left: 0px;
            top: 0.009px;
        }
        #Description_b {
            left: 134.348px;
            top: 5.946px;
            position: absolute;
            overflow: visible;
            width: 74px;
            white-space: nowrap;
            line-height: 14.752079963684082px;
            margin-top: -1.376039981842041px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            color: rgba(26,24,24,1);
        }
        #Rectangle_20 {
            fill: rgba(216,100,24,1);
        }
        .Rectangle_20 {
            position: absolute;
            overflow: visible;
            width: 1.019px;
            height: 84.742px;
            left: 342.676px;
            top: 26.88px;
        }
        #Amount {
            left: 396.243px;
            top: 6.946px;
            position: absolute;
            overflow: visible;
            width: 53px;
            white-space: nowrap;
            line-height: 14.752079963684082px;
            margin-top: -1.376039981842041px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            color: rgba(26,24,24,1);
        }
        #Rectangle_23 {
            fill: rgba(216,103,29,1);
        }
        .Rectangle_23 {
            position: absolute;
            overflow: visible;
            width: 1.019px;
            height: 26.696px;
            left: 342.676px;
            top: 0.009px;
        }
        #Rectangle_27 {
            fill: rgba(213,99,25,1);
        }
        .Rectangle_27 {
            display: none;
            position: absolute;
            overflow: visible;
            width: 600.936px;
            height: 810.37px;
            left: -2px;
            top: 27.319px;
        }
        #Logo {
            position: absolute;
            width: 600.936px;
            height: 810.37px;
            left: 178px;
            top: 44.319px;
            overflow: visible;
        }
        #Rectangle_4 {
            fill: rgba(0,0,0,0);
        }
        .Rectangle_4 {
            position: absolute;
            overflow: visible;
            width: 600.936px;
            height: 810.37px;
            left: 0px;
            top: 0px;
        }
        #Path_6 {
            fill: rgba(216,100,24,1);
        }
        .Path_6 {
            overflow: visible;
            position: absolute;
            width: 22.538px;
            height: 37.375px;
            left: 101.278px;
            top: 0px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_7 {
            fill: rgba(216,100,24,1);
        }
        .Path_7 {
            overflow: visible;
            position: absolute;
            width: 0.749px;
            height: 10.301px;
            left: 112.412px;
            top: 17.523px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_8 {
            fill: rgba(216,100,24,1);
        }
        .Path_8 {
            overflow: visible;
            position: absolute;
            width: 0.749px;
            height: 5.952px;
            left: 114.993px;
            top: 19.708px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_9 {
            fill: rgba(216,100,24,1);
        }
        .Path_9 {
            overflow: visible;
            position: absolute;
            width: 0.78px;
            height: 13.35px;
            left: 106.726px;
            top: 24.026px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_10 {
            fill: rgba(216,100,24,1);
        }
        .Path_10 {
            overflow: visible;
            position: absolute;
            width: 14.312px;
            height: 27.704px;
            left: 120.945px;
            top: 9.635px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_11 {
            fill: rgba(216,100,24,1);
        }
        .Path_11 {
            overflow: visible;
            position: absolute;
            width: 0.687px;
            height: 5.65px;
            left: 119.337px;
            top: 6.545px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Rectangle_9 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_9 {
            position: absolute;
            overflow: visible;
            width: 45.7px;
            height: 0.791px;
            left: 95.431px;
            top: 40.705px;
        }
        #Rectangle_10 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_10 {
            position: absolute;
            overflow: visible;
            width: 56.896px;
            height: 0.791px;
            left: 89.812px;
            top: 42.266px;
        }
        #Path_12 {
            fill: rgba(142,35,24,1);
        }
        .Path_12 {
            overflow: visible;
            position: absolute;
            width: 33.978px;
            height: 14.463px;
            left: 101.279px;
            top: 25.452px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Rectangle_11 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_11 {
            position: absolute;
            overflow: visible;
            width: 0.656px;
            height: 0.656px;
            left: 117.458px;
            top: 31.59px;
        }
        #Rectangle_12 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_12 {
            position: absolute;
            overflow: visible;
            width: 0.656px;
            height: 0.656px;
            left: 118.54px;
            top: 31.59px;
        }
        #Rectangle_13 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_13 {
            position: absolute;
            overflow: visible;
            width: 0.656px;
            height: 0.656px;
            left: 117.458px;
            top: 32.683px;
        }
        #Rectangle_14 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_14 {
            position: absolute;
            overflow: visible;
            width: 0.656px;
            height: 0.656px;
            left: 118.54px;
            top: 32.683px;
        }
        #Path_13 {
            fill: rgba(142,35,24,1);
        }
        .Path_13 {
            overflow: visible;
            position: absolute;
            width: 7.343px;
            height: 9.756px;
            left: 68.707px;
            top: 47.549px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_14 {
            fill: rgba(142,35,24,1);
        }
        .Path_14 {
            overflow: visible;
            position: absolute;
            width: 8.414px;
            height: 9.484px;
            left: 78.692px;
            top: 47.685px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_15 {
            fill: rgba(142,35,24,1);
        }
        .Path_15 {
            overflow: visible;
            position: absolute;
            width: 9.214px;
            height: 9.485px;
            left: 87.783px;
            top: 47.685px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_16 {
            fill: rgba(142,35,24,1);
        }
        .Path_16 {
            overflow: visible;
            position: absolute;
            width: 7.858px;
            height: 9.484px;
            left: 103.878px;
            top: 47.685px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_17 {
            fill: rgba(142,35,24,1);
        }
        .Path_17 {
            overflow: visible;
            position: absolute;
            width: 7.099px;
            height: 9.484px;
            left: 114.853px;
            top: 47.685px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Rectangle_15 {
            fill: rgba(142,35,24,1);
        }
        .Rectangle_15 {
            position: absolute;
            overflow: visible;
            width: 1.666px;
            height: 9.484px;
            left: 124.702px;
            top: 47.685px;
        }
        #Path_18 {
            fill: rgba(142,35,24,1);
        }
        .Path_18 {
            overflow: visible;
            position: absolute;
            width: 8.874px;
            height: 9.81px;
            left: 129.16px;
            top: 47.522px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_19 {
            fill: rgba(142,35,24,1);
        }
        .Path_19 {
            overflow: visible;
            position: absolute;
            width: 7.858px;
            height: 9.484px;
            left: 140.879px;
            top: 47.685px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_20 {
            fill: rgba(142,35,24,1);
        }
        .Path_20 {
            overflow: visible;
            position: absolute;
            width: 7.696px;
            height: 9.485px;
            left: 151.176px;
            top: 47.685px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_21 {
            fill: rgba(142,35,24,1);
        }
        .Path_21 {
            overflow: visible;
            position: absolute;
            width: 7.343px;
            height: 9.756px;
            left: 160.47px;
            top: 47.549px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_22 {
            fill: rgba(216,100,24,1);
        }
        .Path_22 {
            overflow: visible;
            position: absolute;
            width: 4.491px;
            height: 5.283px;
            left: 68.649px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_23 {
            fill: rgba(216,100,24,1);
        }
        .Path_23 {
            overflow: visible;
            position: absolute;
            width: 3.955px;
            height: 5.283px;
            left: 74.861px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_24 {
            fill: rgba(216,100,24,1);
        }
        .Path_24 {
            overflow: visible;
            position: absolute;
            width: 5.51px;
            height: 5.321px;
            left: 80.22px;
            top: 60.794px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_25 {
            fill: rgba(216,100,24,1);
        }
        .Path_25 {
            overflow: visible;
            position: absolute;
            width: 3.706px;
            height: 5.283px;
            left: 87.391px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_26 {
            fill: rgba(216,100,24,1);
        }
        .Path_26 {
            overflow: visible;
            position: absolute;
            width: 3.955px;
            height: 5.283px;
            left: 95.838px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_27 {
            fill: rgba(216,100,24,1);
        }
        .Path_27 {
            overflow: visible;
            position: absolute;
            width: 4.091px;
            height: 5.434px;
            left: 101.295px;
            top: 60.756px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_28 {
            fill: rgba(216,100,24,1);
        }
        .Path_28 {
            overflow: visible;
            position: absolute;
            width: 4.287px;
            height: 5.283px;
            left: 106.745px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_29 {
            fill: rgba(216,100,24,1);
        }
        .Path_29 {
            overflow: visible;
            position: absolute;
            width: 5.51px;
            height: 5.321px;
            left: 111.637px;
            top: 60.794px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_30 {
            fill: rgba(216,100,24,1);
        }
        .Path_30 {
            overflow: visible;
            position: absolute;
            width: 4.287px;
            height: 5.283px;
            left: 117.75px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_31 {
            fill: rgba(216,100,24,1);
        }
        .Path_31 {
            overflow: visible;
            position: absolute;
            width: 3.955px;
            height: 5.283px;
            left: 123.774px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_32 {
            fill: rgba(216,100,24,1);
        }
        .Path_32 {
            overflow: visible;
            position: absolute;
            width: 3.706px;
            height: 5.283px;
            left: 132.606px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Rectangle_16 {
            fill: rgba(216,100,24,1);
        }
        .Rectangle_16 {
            position: absolute;
            overflow: visible;
            width: 0.928px;
            height: 5.283px;
            left: 138.086px;
            top: 60.832px;
        }
        #Path_33 {
            fill: rgba(216,100,24,1);
        }
        .Path_33 {
            overflow: visible;
            position: absolute;
            width: 5.193px;
            height: 5.283px;
            left: 141.181px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Rectangle_17 {
            fill: rgba(216,100,24,1);
        }
        .Rectangle_17 {
            position: absolute;
            overflow: visible;
            width: 0.928px;
            height: 5.283px;
            left: 148.54px;
            top: 60.832px;
        }
        #Path_34 {
            fill: rgba(216,100,24,1);
        }
        .Path_34 {
            overflow: visible;
            position: absolute;
            width: 4.286px;
            height: 5.283px;
            left: 151.258px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_35 {
            fill: rgba(216,100,24,1);
        }
        .Path_35 {
            overflow: visible;
            position: absolute;
            width: 3.955px;
            height: 5.283px;
            left: 157.281px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Path_36 {
            fill: rgba(216,100,24,1);
        }
        .Path_36 {
            overflow: visible;
            position: absolute;
            width: 4.777px;
            height: 5.283px;
            left: 163.094px;
            top: 60.832px;
            transform: matrix(1,0,0,1,0,0);
        }
        #Total {
            position: absolute;
            width: 203.103px;
            height: 27.625px;
            left: 388.167px;
            top: 583.742px;
            overflow: visible;
        }
        #Rectangle_5 {
            fill: rgba(240,240,240,1);
        }
        .Rectangle_5 {
            position: absolute;
            overflow: visible;
            width: 203.103px;
            height: 27.625px;
            left: 0px;
            top: 0px;
        }
        #Total_df {
            left: 17.802px;
            top: 6.401px;
            position: absolute;
            overflow: visible;
            width: 35px;
            white-space: nowrap;
            line-height: 14.752079963684082px;
            margin-top: -1.376039981842041px;
            text-align: left;
            font-family: Montserrat-Bold;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            color: rgba(26,24,24,1);
        }
        #n_332342343 {
            left: 56.802px;
            top: 6.401px;
            position: absolute;
            overflow: visible;
            width: 75px;
            white-space: nowrap;
            line-height: 14.752079963684082px;
            margin-top: -1.2293400764465332px;
            text-align: left;
            font-family: Montserrat;
            font-style: normal;
            font-weight: bold;
            font-size: 12.293399810791016px;
            color: rgba(255,255,255,1);
        }
        #Footer {
            fill: rgba(142,35,24,1);
        }
        .Footer {
            position: absolute;
            overflow: visible;
            width: 592px;
            height: 44px;
            left: 0px;
            top: 793px;
        }
    </style>
    <script id="applicationScript">
        ///////////////////////////////////////
        // INITIALIZATION
        ///////////////////////////////////////

        /**
         * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page.
         * Code subject to change.
         **/

        if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

        var Application = function() {
            // event constants
            this.prefix = "--web-";
            this.NAVIGATION_CHANGE = "viewChange";
            this.VIEW_NOT_FOUND = "viewNotFound";
            this.VIEW_CHANGE = "viewChange";
            this.VIEW_CHANGING = "viewChanging";
            this.STATE_NOT_FOUND = "stateNotFound";
            this.APPLICATION_COMPLETE = "applicationComplete";
            this.APPLICATION_RESIZE = "applicationResize";
            this.SIZE_STATE_NAME = "data-is-view-scaled";
            this.STATE_NAME = this.prefix + "state";

            this.lastTrigger = null;
            this.lastView = null;
            this.lastState = null;
            this.lastOverlay = null;
            this.currentView = null;
            this.currentState = null;
            this.currentOverlay = null;
            this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
            this.inclusionQuery = "(min-width: 0px)";
            this.exclusionQuery = "none and (min-width: 99999px)";
            this.LastModifiedDateLabelName = "LastModifiedDateLabel";
            this.viewScaleSliderId = "ViewScaleSliderInput";
            this.pageRefreshedName = "showPageRefreshedNotification";
            this.application = null;
            this.applicationStylesheet = null;
            this.showByMediaQuery = null;
            this.mediaQueryDictionary = {};
            this.viewsDictionary = {};
            this.addedViews = [];
            this.viewStates = [];
            this.views = [];
            this.viewIds = [];
            this.viewQueries = {};
            this.overlays = {};
            this.overlayIds = [];
            this.numberOfViews = 0;
            this.verticalPadding = 0;
            this.horizontalPadding = 0;
            this.stateName = null;
            this.viewScale = 1;
            this.viewLeft = 0;
            this.viewTop = 0;
            this.horizontalScrollbarsNeeded = false;
            this.verticalScrollbarsNeeded = false;

            // view settings
            this.showUpdateNotification = false;
            this.showNavigationControls = false;
            this.scaleViewsToFit = false;
            this.scaleToFitOnDoubleClick = false;
            this.actualSizeOnDoubleClick = false;
            this.scaleViewsOnResize = false;
            this.navigationOnKeypress = false;
            this.showViewName = false;
            this.enableDeepLinking = true;
            this.refreshPageForChanges = false;
            this.showRefreshNotifications = true;

            // view controls
            this.scaleViewSlider = null;
            this.lastModifiedLabel = null;
            this.supportsPopState = false; // window.history.pushState!=null;
            this.initialized = false;

            // refresh properties
            this.refreshDuration = 250;
            this.lastModifiedDate = null;
            this.refreshRequest = null;
            this.refreshInterval = null;
            this.refreshContent = null;
            this.refreshContentSize = null;
            this.refreshCheckContent = false;
            this.refreshCheckContentSize = false;

            var self = this;

            self.initialize = function(event) {
                var view = self.getVisibleView();
                var views = self.getVisibleViews();
                if (view==null) view = self.getInitialView();
                self.collectViews();
                self.collectOverlays();
                self.collectMediaQueries();

                for (let index = 0; index < views.length; index++) {
                    var view = views[index];
                    self.setViewOptions(view);
                    self.setViewVariables(view);
                    self.centerView(view);
                }

                // sometimes the body size is 0 so we call this now and again later
                if (self.initialized) {
                    window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
                    window.addEventListener("keyup", self.keypressHandler);
                    window.addEventListener("keypress", self.keypressHandler);
                    window.addEventListener("resize", self.resizeHandler);
                    window.document.addEventListener("dblclick", self.doubleClickHandler);

                    if (self.supportsPopState) {
                        window.addEventListener('popstate', self.popStateHandler);
                    }
                    else {
                        window.addEventListener('hashchange', self.hashChangeHandler);
                    }

                    // we are ready to go
                    window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
                }

                if (self.initialized==false) {
                    if (self.enableDeepLinking) {
                        self.syncronizeViewToURL();
                    }

                    if (self.refreshPageForChanges) {
                        self.setupRefreshForChanges();
                    }

                    self.initialized = true;
                }

                if (self.scaleViewsToFit) {
                    self.viewScale = self.scaleViewToFit(view);

                    if (self.viewScale<0) {
                        setTimeout(self.scaleViewToFit, 500, view);
                    }
                }
                else if (view) {
                    self.viewScale = self.getViewScaleValue(view);
                    self.centerView(view);
                    self.updateSliderValue(self.viewScale);
                }
                else {
                    // no view found
                }

                if (self.showUpdateNotification) {
                    self.showNotification();
                }

                //"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
                //"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
            }


            ///////////////////////////////////////
            // AUTO REFRESH
            ///////////////////////////////////////

            self.setupRefreshForChanges = function() {
                self.refreshRequest = new XMLHttpRequest();

                if (!self.refreshRequest) {
                    return false;
                }

                // get document start values immediately
                self.requestRefreshUpdate();
            }

            /**
             * Attempt to check the last modified date by the headers
             * or the last modified property from the byte array (experimental)
             **/
            self.requestRefreshUpdate = function() {
                var url = document.location.href;
                var protocol = window.location.protocol;
                var method;

                try {

                    if (self.refreshCheckContentSize) {
                        self.refreshRequest.open('HEAD', url, true);
                    }
                    else if (self.refreshCheckContent) {
                        self.refreshContent = document.documentElement.outerHTML;
                        self.refreshRequest.open('GET', url, true);
                        self.refreshRequest.responseType = "text";
                    }
                    else {

                        // get page last modified date for the first call to compare to later
                        if (self.lastModifiedDate==null) {

                            // File system does not send headers in FF so get blob if possible
                            if (protocol=="file:") {
                                self.refreshRequest.open("GET", url, true);
                                self.refreshRequest.responseType = "blob";
                            }
                            else {
                                self.refreshRequest.open("HEAD", url, true);
                                self.refreshRequest.responseType = "blob";
                            }

                            self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

                            // In some browsers (Chrome & Safari) this error occurs at send:
                            //
                            // Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null'
                            // has been blocked by CORS policy:
                            // Cross origin requests are only supported for protocol schemes:
                            // http, data, chrome, chrome-extension, https.
                            //
                            // Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
                            //
                            // Solution is to run a local server, set local permissions or test in another browser
                            self.refreshRequest.send(null);

                            // In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date:
                            //
                            // DOM7011: The code on this page disabled back and forward caching.

                            // In Brave (Chrome) error when on the server
                            // index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
                            // self.refreshRequest.send(null);

                        }
                        else {
                            self.refreshRequest = new XMLHttpRequest();
                            self.refreshRequest.onreadystatechange = self.refreshHandler;
                            self.refreshRequest.ontimeout = function() {
                                self.log("Couldn't find page to check for updates");
                            }

                            var method;
                            if (protocol=="file:") {
                                method = "GET";
                            }
                            else {
                                method = "HEAD";
                            }

                            //refreshRequest.open('HEAD', url, true);
                            self.refreshRequest.open(method, url, true);
                            self.refreshRequest.responseType = "blob";
                            self.refreshRequest.send(null);
                        }
                    }
                }
                catch (error) {
                    self.log("Refresh failed for the following reason:")
                    self.log(error);
                }
            }

            self.refreshHandler = function() {
                var contentSize;

                try {

                    if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {

                        if (self.refreshRequest.status === 2 ||
                            self.refreshRequest.status === 200) {
                            var pageChanged = false;

                            self.updateLastModifiedLabel();

                            if (self.refreshCheckContentSize) {
                                var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
                                contentSize = self.refreshRequest.getResponseHeader("Content-Length");
                                //lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
                                var headers = self.refreshRequest.getAllResponseHeaders();
                                var hasContentHeader = headers.indexOf("Content-Length")!=-1;

                                if (hasContentHeader) {
                                    contentSize = self.refreshRequest.getResponseHeader("Content-Length");

                                    // size has not been set yet
                                    if (self.refreshContentSize==null) {
                                        self.refreshContentSize = contentSize;
                                        // exit and let interval call this method again
                                        return;
                                    }

                                    if (contentSize!=self.refreshContentSize) {
                                        pageChanged = true;
                                    }
                                }
                            }
                            else if (self.refreshCheckContent) {

                                if (self.refreshRequest.responseText!=self.refreshContent) {
                                    pageChanged = true;
                                }
                            }
                            else {
                                lastModifiedHeader = self.getLastModified(self.refreshRequest);

                                if (self.lastModifiedDate!=lastModifiedHeader) {
                                    self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
                                    pageChanged = true;
                                }

                            }


                            if (pageChanged) {
                                clearInterval(self.refreshInterval);
                                self.refreshUpdatedPage();
                                return;
                            }

                        }
                        else {
                            self.log('There was a problem with the request.');
                        }

                    }
                }
                catch( error ) {
                    //console.log('Caught Exception: ' + error);
                }
            }

            self.refreshOnLoadOnceHandler = function(event) {

                // get the last modified date
                if (self.refreshRequest.response) {
                    self.lastModifiedDate = self.getLastModified(self.refreshRequest);

                    if (self.lastModifiedDate!=null) {

                        if (self.refreshInterval==null) {
                            self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
                        }
                    }
                    else {
                        self.log("Could not get last modified date from the server");
                    }
                }
            }

            self.refreshUpdatedPage = function() {
                if (self.showRefreshNotifications) {
                    var date = new Date().setTime((new Date().getTime()+10000));
                    document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
                }

                document.location.reload(true);
            }

            self.showNotification = function(duration) {
                var notificationID = self.pageRefreshedName+"ID";
                var notification = document.getElementById(notificationID);
                if (duration==null) duration = 4000;

                if (notification!=null) {return;}

                notification = document.createElement("div");
                notification.id = notificationID;
                notification.textContent = "PAGE UPDATED";
                var styleRule = ""
                styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
                styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
                styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1)); cursor: pointer";
                notification.setAttribute("style", styleRule);

                notification.className = "PageRefreshedClass";
                notification.addEventListener("click", function() {
                    notification.parentNode.removeChild(notification);
                });

                document.body.appendChild(notification);

                setTimeout(function() {
                    notification.style.opacity = "0";
                    notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
                    setTimeout(function() {
                        try {
                            notification.parentNode.removeChild(notification);
                        } catch(error) {}
                    }, duration)
                }, duration);

                document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
            }

            /**
             * Get the last modified date from the header
             * or file object after request has been received
             **/
            self.getLastModified = function(request) {
                var date;

                // file protocol - FILE object with last modified property
                if (request.response && request.response.lastModified) {
                    date = request.response.lastModified;
                }

                // http protocol - check headers
                if (date==null) {
                    date = request.getResponseHeader("Last-Modified");
                }

                return date;
            }

            self.updateLastModifiedLabel = function() {
                var labelValue = "";

                if (self.lastModifiedLabel==null) {
                    self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
                }

                if (self.lastModifiedLabel) {
                    var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
                    var minutes = 0;
                    var hours = 0;

                    if (seconds < 60) {
                        seconds = Math.floor(seconds/10)*10;
                        labelValue = seconds + " seconds";
                    }
                    else {
                        minutes = parseInt((seconds/60) + "");

                        if (minutes>60) {
                            hours = parseInt((seconds/60/60) +"");
                            labelValue += hours==1 ? " hour" : " hours";
                        }
                        else {
                            labelValue = minutes+"";
                            labelValue += minutes==1 ? " minute" : " minutes";
                        }
                    }

                    if (seconds<10) {
                        labelValue = "Updated now";
                    }
                    else {
                        labelValue = "Updated " + labelValue + " ago";
                    }

                    if (self.lastModifiedLabel.firstElementChild) {
                        self.lastModifiedLabel.firstElementChild.textContent = labelValue;

                    }
                    else if ("textContent" in self.lastModifiedLabel) {
                        self.lastModifiedLabel.textContent = labelValue;
                    }
                }
            }

            self.getShortString = function(string, length) {
                if (length==null) length = 30;
                string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
                return string;
            }

            self.getShortNumber = function(value, places) {
                if (places==null || places<1) places = 4;
                value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
                return value;
            }

            ///////////////////////////////////////
            // NAVIGATION CONTROLS
            ///////////////////////////////////////

            self.updateViewLabel = function() {
                var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
                var view = self.getVisibleView();
                var viewIndex = view ? self.getViewIndex(view) : -1;
                var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
                var viewId = view ? view.id : null;

                if (viewNavigationLabel && view) {
                    if (viewName && viewName.indexOf('"')!=-1) {
                        viewName = viewName.replace(/"/g, "");
                    }

                    if (self.showViewName) {
                        viewNavigationLabel.textContent = viewName;
                        self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
                    }
                    else {
                        viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
                        self.setTooltip(viewNavigationLabel, viewName);
                    }

                }
            }

            self.updateURL = function(view) {
                view = view == null ? self.getVisibleView() : view;
                var viewId = view ? view.id : null
                var viewFragment = view ? "#"+ viewId : null;

                if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

                    if (self.supportsPopState==false) {
                        self.setFragment(viewId);
                    }
                    else {
                        if (viewFragment!=window.location.hash) {

                            if (window.location.hash==null) {
                                window.history.replaceState({name:viewId}, null, viewFragment);
                            }
                            else {
                                window.history.pushState({name:viewId}, null, viewFragment);
                            }
                        }
                    }
                }
            }

            self.updateURLState = function(view, stateName) {
                stateName = view && (stateName=="" || stateName==null) ? self.getStateNameByViewId(view.id) : stateName;

                if (self.supportsPopState==false) {
                    self.setFragment(stateName);
                }
                else {
                    if (stateName!=window.location.hash) {

                        if (window.location.hash==null) {
                            window.history.replaceState({name:view.viewId}, null, stateName);
                        }
                        else {
                            window.history.pushState({name:view.viewId}, null, stateName);
                        }
                    }
                }
            }

            self.setFragment = function(value) {
                window.location.hash = "#" + value;
            }

            self.setTooltip = function(element, value) {
                // setting the tooltip in edge causes a page crash on hover
                if (/Edge/.test(navigator.userAgent)) { return; }

                if ("title" in element) {
                    element.title = value;
                }
            }

            self.getStylesheetRules = function(styleSheet) {
                try {
                    if (styleSheet) return styleSheet.cssRules || styleSheet.rules;

                    return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
                }
                catch (error) {
                    // ERRORS:
                    // SecurityError: The operation is insecure.
                    // Errors happen when script loads before stylesheet or loading an external css locally

                    // InvalidAccessError: A parameter or an operation is not supported by the underlying object
                    // Place script after stylesheet

                    console.log(error);
                    if (error.toString().indexOf("The operation is insecure")!=-1) {
                        console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
                    }
                    return [];
                }
            }

            /**
             * If single page application hide all of the views.
             * @param {Number} selectedIndex if provided shows the view at index provided
             **/
            self.hideViews = function(selectedIndex, animation) {
                var rules = self.getStylesheetRules();
                var queryIndex = 0;
                var numberOfRules = rules!=null ? rules.length : 0;

                // loop through rules and hide media queries except selected
                for (var i=0;i<numberOfRules;i++) {
                    var rule = rules[i];
                    var cssText = rule && rule.cssText;

                    if (rule.media!=null && cssText.match("--web-view-name:")) {

                        if (queryIndex==selectedIndex) {
                            self.currentQuery.mediaText = rule.conditionText;
                            self.currentQuery.index = selectedIndex;
                            self.currentQuery.rule = rule;
                            self.enableMediaQuery(rule);
                        }
                        else {
                            if (animation) {
                                self.fadeOut(rule)
                            }
                            else {
                                self.disableMediaQuery(rule);
                            }
                        }

                        queryIndex++;
                    }
                }

                self.numberOfViews = queryIndex;
                self.updateViewLabel();
                self.updateURL();

                self.dispatchViewChange();

                var view = self.getVisibleView();
                var viewIndex = view ? self.getViewIndex(view) : -1;

                return viewIndex==selectedIndex ? view : null;
            }

            /**
             * If single page application hide all of the views.
             * @param {HTMLElement} selectedView if provided shows the view passed in
             **/
            self.hideAllViews = function(selectedView, animation) {
                var views = self.views;
                var queryIndex = 0;
                var numberOfViews = views!=null ? views.length : 0;

                // loop through rules and hide media queries except selected
                for (var i=0;i<numberOfViews;i++) {
                    var viewData = views[i];
                    var view = viewData && viewData.view;
                    var mediaRule = viewData && viewData.mediaRule;

                    if (view==selectedView) {
                        self.currentQuery.mediaText = mediaRule.conditionText;
                        self.currentQuery.index = queryIndex;
                        self.currentQuery.rule = mediaRule;
                        self.enableMediaQuery(mediaRule);
                    }
                    else {
                        if (animation) {
                            self.fadeOut(mediaRule)
                        }
                        else {
                            self.disableMediaQuery(mediaRule);
                        }
                    }

                    queryIndex++;
                }

                self.numberOfViews = queryIndex;
                self.updateViewLabel();
                self.updateURL();
                self.dispatchViewChange();

                var visibleView = self.getVisibleView();

                return visibleView==selectedView ? selectedView : null;
            }

            /**
             * Hide view
             * @param {Object} view element to hide
             **/
            self.hideView = function(view) {
                var rule = view ? self.mediaQueryDictionary[view.id] : null;

                if (rule) {
                    self.disableMediaQuery(rule);
                }
            }

            /**
             * Hide overlay
             * @param {Object} overlay element to hide
             **/
            self.hideOverlay = function(overlay) {
                var rule = overlay ? self.mediaQueryDictionary[overlay.id] : null;

                if (rule) {
                    self.disableMediaQuery(rule);

                    //if (self.showByMediaQuery) {
                    overlay.style.display = "none";
                    //}
                }
            }

            /**
             * Show the view by media query. Does not hide current views
             * Sets view options by default
             * @param {Object} view element to show
             * @param {Boolean} setViewOptions sets view options if null or true
             */
            self.showViewByMediaQuery = function(view, setViewOptions) {
                var id = view ? view.id : null;
                var query = id ? self.mediaQueryDictionary[id] : null;
                var isOverlay = view ? self.isOverlay(view) : false;
                setViewOptions = setViewOptions==null ? true : setViewOptions;

                if (query) {
                    self.enableMediaQuery(query);

                    if (isOverlay && view && setViewOptions) {
                        self.setViewVariables(null, view);
                    }
                    else {
                        if (view && setViewOptions) self.setViewOptions(view);
                        if (view && setViewOptions) self.setViewVariables(view);
                    }
                }
            }

            /**
             * Show the view. Does not hide current views
             */
            self.showView = function(view, setViewOptions) {
                var id = view ? view.id : null;
                var query = id ? self.mediaQueryDictionary[id] : null;
                var display = null;
                setViewOptions = setViewOptions==null ? true : setViewOptions;

                if (query) {
                    self.enableMediaQuery(query);
                    if (view==null) view =self.getVisibleView();
                    if (view && setViewOptions) self.setViewOptions(view);
                }
                else if (id) {
                    display = window.getComputedStyle(view).getPropertyValue("display");
                    if (display=="" || display=="none") {
                        view.style.display = "block";
                    }
                }

                if (view) {
                    if (self.currentView!=null) {
                        self.lastView = self.currentView;
                    }

                    self.currentView = view;
                }
            }

            self.showViewById = function(id, setViewOptions) {
                var view = id ? self.getViewById(id) : null;

                if (view) {
                    self.showView(view);
                    return;
                }

                self.log("View not found '" + id + "'");
            }

            self.getElementView = function(element) {
                var view = element;
                var viewFound = false;

                while (viewFound==false || view==null) {
                    if (view && self.viewsDictionary[view.id]) {
                        return view;
                    }
                    view = view.parentNode;
                }
            }

            /**
             * Show overlay over view
             * @param {Event | HTMLElement} event event or html element with styles applied
             * @param {String} id id of view or view reference
             * @param {Number} x x location
             * @param {Number} y y location
             */
            self.showOverlay = function(event, id, x, y) {
                var overlay = id && typeof id === 'string' ? self.getViewById(id) : id ? id : null;
                var query = overlay ? self.mediaQueryDictionary[overlay.id] : null;
                var centerHorizontally = false;
                var centerVertically = false;
                var anchorLeft = false;
                var anchorTop = false;
                var anchorRight = false;
                var anchorBottom = false;
                var display = null;
                var reparent = true;
                var view = null;

                if (overlay==null || overlay==false) {
                    self.log("Overlay not found, '"+ id + "'");
                    return;
                }

                // get enter animation - event target must have css variables declared
                if (event) {
                    var button = event.currentTarget || event; // can be event or htmlelement
                    var buttonComputedStyles = getComputedStyle(button);
                    var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
                    var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
                    var isAnimated = animation!="";
                    var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
                    var actionTarget = self.application ? null : self.getElement(actionTargetValue);
                    var actionTargetStyles = actionTarget ? actionTarget.style : null;

                    if (actionTargetStyles) {
                        actionTargetStyles.setProperty("animation", animation);
                    }

                    if ("stopImmediatePropagation" in event) {
                        event.stopImmediatePropagation();
                    }
                }

                if (self.application==false || targetType=="page") {
                    document.location.href = "./" + actionTargetValue;
                    return;
                }

                // remove any current overlays
                if (self.currentOverlay) {

                    // act as switch if same button
                    if (self.currentOverlay==actionTarget || self.currentOverlay==null) {
                        if (self.lastTrigger==button) {
                            self.removeOverlay(isAnimated);
                            return;
                        }
                    }
                    else {
                        self.removeOverlay(isAnimated);
                    }
                }

                if (reparent) {
                    view = self.getElementView(button);
                    if (view) {
                        view.appendChild(overlay);
                    }
                }

                if (query) {
                    //self.setElementAnimation(overlay, null);
                    //overlay.style.animation = animation;
                    self.enableMediaQuery(query);

                    var display = overlay && overlay.style.display;

                    if (overlay && display=="" || display=="none") {
                        overlay.style.display = "block";
                        //self.setViewOptions(overlay);
                    }

                    // add animation defined in event target style declaration
                    if (animation && self.supportAnimations) {
                        self.fadeIn(overlay, false, animation);
                    }
                }
                else if (id) {

                    display = window.getComputedStyle(overlay).getPropertyValue("display");

                    if (display=="" || display=="none") {
                        overlay.style.display = "block";
                    }

                    // add animation defined in event target style declaration
                    if (animation && self.supportAnimations) {
                        self.fadeIn(overlay, false, animation);
                    }
                }

                // do not set x or y position if centering
                var horizontal = self.prefix + "center-horizontally";
                var vertical = self.prefix + "center-vertically";
                var style = overlay.style;
                var transform = [];

                centerHorizontally = self.getIsStyleDefined(id, horizontal) ? self.getViewPreferenceBoolean(overlay, horizontal) : false;
                centerVertically = self.getIsStyleDefined(id, vertical) ? self.getViewPreferenceBoolean(overlay, vertical) : false;
                anchorLeft = self.getIsStyleDefined(id, "left");
                anchorRight = self.getIsStyleDefined(id, "right");
                anchorTop = self.getIsStyleDefined(id, "top");
                anchorBottom = self.getIsStyleDefined(id, "bottom");


                if (self.viewsDictionary[overlay.id] && self.viewsDictionary[overlay.id].styleDeclaration) {
                    style = self.viewsDictionary[overlay.id].styleDeclaration.style;
                }

                if (centerHorizontally) {
                    style.left = "50%";
                    style.transformOrigin = "0 0";
                    transform.push("translateX(-50%)");
                }
                else if (anchorRight && anchorLeft) {
                    style.left = x + "px";
                }
                else if (anchorRight) {
                    //style.right = x + "px";
                }
                else {
                    style.left = x + "px";
                }

                if (centerVertically) {
                    style.top = "50%";
                    transform.push("translateY(-50%)");
                    style.transformOrigin = "0 0";
                }
                else if (anchorTop && anchorBottom) {
                    style.top = y + "px";
                }
                else if (anchorBottom) {
                    //style.bottom = y + "px";
                }
                else {
                    style.top = y + "px";
                }

                if (transform.length) {
                    style.transform = transform.join(" ");
                }

                self.currentOverlay = overlay;
                self.lastTrigger = button;
            }

            self.goBack = function() {
                if (self.currentOverlay) {
                    self.removeOverlay();
                }
                else if (self.lastView) {
                    self.goToView(self.lastView.id);
                }
            }

            self.removeOverlay = function(animate) {
                var overlay = self.currentOverlay;
                animate = animate===false ? false : true;

                if (overlay) {
                    var style = overlay.style;

                    if (style.animation && self.supportAnimations && animate) {
                        self.reverseAnimation(overlay, true);

                        var duration = self.getAnimationDuration(style.animation, true);

                        setTimeout(function() {
                            self.setElementAnimation(overlay, null);
                            self.hideOverlay(overlay);
                            self.currentOverlay = null;
                        }, duration);
                    }
                    else {
                        self.setElementAnimation(overlay, null);
                        self.hideOverlay(overlay);
                        self.currentOverlay = null;
                    }
                }
            }

            /**
             * Reverse the animation and hide after
             * @param {Object} target element with animation
             * @param {Boolean} hide hide after animation ends
             */
            self.reverseAnimation = function(target, hide) {
                var lastAnimation = null;
                var style = target.style;

                style.animationPlayState = "paused";
                lastAnimation = style.animation;
                style.animation = null;
                style.animationPlayState = "paused";

                if (hide) {
                    //target.addEventListener("animationend", self.animationEndHideHandler);

                    var duration = self.getAnimationDuration(lastAnimation, true);
                    var isOverlay = self.isOverlay(target);

                    setTimeout(function() {
                        self.setElementAnimation(target, null);

                        if (isOverlay) {
                            self.hideOverlay(target);
                        }
                        else {
                            self.hideView(target);
                        }
                    }, duration);
                }

                setTimeout(function() {
                    style.animation = lastAnimation;
                    style.animationPlayState = "paused";
                    style.animationDirection = "reverse";
                    style.animationPlayState = "running";
                }, 30);
            }

            self.animationEndHandler = function(event) {
                var target = event.currentTarget;
                self.dispatchEvent(new Event(event.type));
            }

            self.isOverlay = function(view) {
                var result = view ? self.getViewPreferenceBoolean(view, self.prefix + "is-overlay") : false;

                return result;
            }

            self.animationEndHideHandler = function(event) {
                var target = event.currentTarget;
                self.setViewVariables(null, target);
                self.hideView(target);
                target.removeEventListener("animationend", self.animationEndHideHandler);
            }

            self.animationEndShowHandler = function(event) {
                var target = event.currentTarget;
                target.removeEventListener("animationend", self.animationEndShowHandler);
            }

            self.setViewOptions = function(view) {

                if (view) {
                    self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
                    self.maximumScale = self.getViewPreferenceValue(view, self.prefix + "maximum-scale");
                    self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
                    self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
                    self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
                    self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
                    self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
                    self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
                    self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
                    self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
                    self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
                    self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
                    self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
                    self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
                    self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
                    self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
                    self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
                    self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
                    self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
                    self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
                    self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
                    self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

                    if (self.scaleViewsToFit) {
                        var newScaleValue = self.scaleViewToFit(view);

                        if (newScaleValue<0) {
                            setTimeout(self.scaleViewToFit, 500, view);
                        }
                    }
                    else {
                        self.viewScale = self.getViewScaleValue(view);
                        self.viewToFitWidthScale = self.getViewFitToViewportWidthScale(view, self.enableScaleUp)
                        self.viewToFitHeightScale = self.getViewFitToViewportScale(view, self.enableScaleUp);
                        self.updateSliderValue(self.viewScale);
                    }

                    if (self.imageComparisonDuration!=null) {
                        // todo
                    }

                    if (self.refreshPageForChangesInterval!=null) {
                        self.refreshDuration = Number(self.refreshPageForChangesInterval);
                    }
                }
            }

            self.previousView = function(event) {
                var rules = self.getStylesheetRules();
                var view = self.getVisibleView()
                var index = view ? self.getViewIndex(view) : -1;
                var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
                var queryIndex = 0;
                var numberOfRules = rules!=null ? rules.length : 0;

                if (event) {
                    event.stopImmediatePropagation();
                }

                if (prevQueryIndex<0) {
                    return;
                }

                // loop through rules and hide media queries except selected
                for (var i=0;i<numberOfRules;i++) {
                    var rule = rules[i];

                    if (rule.media!=null) {

                        if (queryIndex==prevQueryIndex) {
                            self.currentQuery.mediaText = rule.conditionText;
                            self.currentQuery.index = prevQueryIndex;
                            self.currentQuery.rule = rule;
                            self.enableMediaQuery(rule);
                            self.updateViewLabel();
                            self.updateURL();
                            self.dispatchViewChange();
                        }
                        else {
                            self.disableMediaQuery(rule);
                        }

                        queryIndex++;
                    }
                }
            }

            self.nextView = function(event) {
                var rules = self.getStylesheetRules();
                var view = self.getVisibleView();
                var index = view ? self.getViewIndex(view) : -1;
                var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
                var queryIndex = 0;
                var numberOfRules = rules!=null ? rules.length : 0;
                var numberOfMediaQueries = self.getNumberOfMediaRules();

                if (event) {
                    event.stopImmediatePropagation();
                }

                if (nextQueryIndex>=numberOfMediaQueries) {
                    return;
                }

                // loop through rules and hide media queries except selected
                for (var i=0;i<numberOfRules;i++) {
                    var rule = rules[i];

                    if (rule.media!=null) {

                        if (queryIndex==nextQueryIndex) {
                            self.currentQuery.mediaText = rule.conditionText;
                            self.currentQuery.index = nextQueryIndex;
                            self.currentQuery.rule = rule;
                            self.enableMediaQuery(rule);
                            self.updateViewLabel();
                            self.updateURL();
                            self.dispatchViewChange();
                        }
                        else {
                            self.disableMediaQuery(rule);
                        }

                        queryIndex++;
                    }
                }
            }

            /**
             * Enables a view via media query
             */
            self.enableMediaQuery = function(rule) {

                try {
                    rule.media.mediaText = self.inclusionQuery;
                }
                catch(error) {
                    //self.log(error);
                    rule.conditionText = self.inclusionQuery;
                }
            }

            self.disableMediaQuery = function(rule) {

                try {
                    rule.media.mediaText = self.exclusionQuery;
                }
                catch(error) {
                    rule.conditionText = self.exclusionQuery;
                }
            }

            self.dispatchViewChange = function() {
                try {
                    var event = new Event(self.NAVIGATION_CHANGE);
                    window.dispatchEvent(event);
                }
                catch (error) {
                    // In IE 11: Object doesn't support this action
                }
            }

            self.getNumberOfMediaRules = function() {
                var rules = self.getStylesheetRules();
                var numberOfRules = rules ? rules.length : 0;
                var numberOfQueries = 0;

                for (var i=0;i<numberOfRules;i++) {
                    if (rules[i].media!=null) { numberOfQueries++; }
                }

                return numberOfQueries;
            }

            /////////////////////////////////////////
            // VIEW SCALE
            /////////////////////////////////////////

            self.sliderChangeHandler = function(event) {
                var value = self.getShortNumber(event.currentTarget.value/100);
                var view = self.getVisibleView();
                self.setViewScaleValue(view, false, value, true);
            }

            self.updateSliderValue = function(scale) {
                var slider = document.getElementById(self.viewScaleSliderId);
                var tooltip = parseInt(scale * 100 + "") + "%";
                var inputType;
                var inputValue;

                if (slider) {
                    inputValue = self.getShortNumber(scale * 100);
                    if (inputValue!=slider["value"]) {
                        slider["value"] = inputValue;
                    }
                    inputType = slider.getAttributeNS(null, "type");

                    if (inputType!="range") {
                        // input range is not supported
                        slider.style.display = "none";
                    }

                    self.setTooltip(slider, tooltip);
                }
            }

            self.viewChangeHandler = function(event) {
                var view = self.getVisibleView();
                var matrix = view ? getComputedStyle(view).transform : null;

                if (matrix) {
                    self.viewScale = self.getViewScaleValue(view);

                    var scaleNeededToFit = self.getViewFitToViewportScale(view);
                    var isViewLargerThanViewport = scaleNeededToFit<1;

                    // scale large view to fit if scale to fit is enabled
                    if (self.scaleViewsToFit) {
                        self.scaleViewToFit(view);
                    }
                    else {
                        self.updateSliderValue(self.viewScale);
                    }
                }
            }

            self.getViewScaleValue = function(view) {
                var matrix = getComputedStyle(view).transform;

                if (matrix) {
                    var matrixArray = matrix.replace("matrix(", "").split(",");
                    var scaleX = parseFloat(matrixArray[0]);
                    var scaleY = parseFloat(matrixArray[3]);
                    var scale = Math.min(scaleX, scaleY);
                }

                return scale;
            }

            /**
             * Scales view to scale.
             * @param {Object} view view to scale. views are in views array
             * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
             * @param {Number} desiredScale scale to define. not used if scale to fit is false
             * @param {Boolean} isSliderChange indicates if slider is callee
             */
            self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
                var enableScaleUp = self.enableScaleUp;
                var scaleToFitType = self.scaleToFitType;
                var minimumScale = self.minimumScale;
                var maximumScale = self.maximumScale;
                var hasMinimumScale = !isNaN(minimumScale) && minimumScale!="";
                var hasMaximumScale = !isNaN(maximumScale) && maximumScale!="";
                var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
                var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
                var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
                var scaleToFitFull = self.getViewFitToViewportScale(view, true);
                var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
                var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
                var scaleToWidth = scaleToFitType=="width";
                var scaleToHeight = scaleToFitType=="height";
                var shrunkToFit = false;
                var topPosition = null;
                var leftPosition = null;
                var translateY = null;
                var translateX = null;
                var transformValue = "";
                var canCenterVertically = true;
                var canCenterHorizontally = true;
                var style = view.style;

                if (view && self.viewsDictionary[view.id] && self.viewsDictionary[view.id].styleDeclaration) {
                    style = self.viewsDictionary[view.id].styleDeclaration.style;
                }

                if (scaleToFit && isSliderChange!=true) {
                    if (scaleToFitType=="fit" || scaleToFitType=="") {
                        desiredScale = scaleNeededToFit;
                    }
                    else if (scaleToFitType=="width") {
                        desiredScale = scaleNeededToFitWidth;
                    }
                    else if (scaleToFitType=="height") {
                        desiredScale = scaleNeededToFitHeight;
                    }
                }
                else {
                    if (isNaN(desiredScale)) {
                        desiredScale = 1;
                    }
                }

                self.updateSliderValue(desiredScale);

                // scale to fit width
                if (scaleToWidth && scaleToHeight==false) {
                    canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
                    canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

                    if (isSliderChange) {
                        canCenterHorizontally = desiredScale<scaleToFitFullWidth;
                    }
                    else if (scaleToFit) {
                        desiredScale = scaleNeededToFitWidth;
                    }

                    if (hasMinimumScale) {
                        desiredScale = Math.max(desiredScale, Number(minimumScale));
                    }

                    if (hasMaximumScale) {
                        desiredScale = Math.min(desiredScale, Number(maximumScale));
                    }

                    desiredScale = self.getShortNumber(desiredScale);

                    canCenterHorizontally = self.canCenterHorizontally(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);
                    canCenterVertically = self.canCenterVertically(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);

                    if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
                        transformValue = "scale(" + desiredScale + ")";
                    }
                    else if (desiredScale>=1 && enableScaleUp==false) {
                        transformValue = "scale(" + 1 + ")";
                    }
                    else {
                        transformValue = "scale(" + desiredScale + ")";
                    }

                    if (self.centerVertically) {
                        if (canCenterVertically) {
                            translateY = "-50%";
                            topPosition = "50%";
                        }
                        else {
                            translateY = "0";
                            topPosition = "0";
                        }

                        if (style.top != topPosition) {
                            style.top = topPosition + "";
                        }

                        if (canCenterVertically) {
                            transformValue += " translateY(" + translateY+ ")";
                        }
                    }

                    if (self.centerHorizontally) {
                        if (canCenterHorizontally) {
                            translateX = "-50%";
                            leftPosition = "50%";
                        }
                        else {
                            translateX = "0";
                            leftPosition = "0";
                        }

                        if (style.left != leftPosition) {
                            style.left = leftPosition + "";
                        }

                        if (canCenterHorizontally) {
                            transformValue += " translateX(" + translateX+ ")";
                        }
                    }

                    style.transformOrigin = "0 0";
                    style.transform = transformValue;

                    self.viewScale = desiredScale;
                    self.viewToFitWidthScale = scaleNeededToFitWidth;
                    self.viewToFitHeightScale = scaleNeededToFitHeight;
                    self.viewLeft = leftPosition;
                    self.viewTop = topPosition;

                    return desiredScale;
                }

                // scale to fit height
                if (scaleToHeight && scaleToWidth==false) {
                    //canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
                    //canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
                    canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
                    canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

                    if (isSliderChange) {
                        canCenterHorizontally = desiredScale<scaleToFitFullHeight;
                    }
                    else if (scaleToFit) {
                        desiredScale = scaleNeededToFitHeight;
                    }

                    if (hasMinimumScale) {
                        desiredScale = Math.max(desiredScale, Number(minimumScale));
                    }

                    if (hasMaximumScale) {
                        desiredScale = Math.min(desiredScale, Number(maximumScale));
                        //canCenterVertically = desiredScale>=scaleNeededToFitHeight && enableScaleUp==false;
                    }

                    desiredScale = self.getShortNumber(desiredScale);

                    canCenterHorizontally = self.canCenterHorizontally(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);
                    canCenterVertically = self.canCenterVertically(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);

                    if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
                        transformValue = "scale(" + desiredScale + ")";
                    }
                    else if (desiredScale>=1 && enableScaleUp==false) {
                        transformValue = "scale(" + 1 + ")";
                    }
                    else {
                        transformValue = "scale(" + desiredScale + ")";
                    }

                    if (self.centerHorizontally) {
                        if (canCenterHorizontally) {
                            translateX = "-50%";
                            leftPosition = "50%";
                        }
                        else {
                            translateX = "0";
                            leftPosition = "0";
                        }

                        if (style.left != leftPosition) {
                            style.left = leftPosition + "";
                        }

                        if (canCenterHorizontally) {
                            transformValue += " translateX(" + translateX+ ")";
                        }
                    }

                    if (self.centerVertically) {
                        if (canCenterVertically) {
                            translateY = "-50%";
                            topPosition = "50%";
                        }
                        else {
                            translateY = "0";
                            topPosition = "0";
                        }

                        if (style.top != topPosition) {
                            style.top = topPosition + "";
                        }

                        if (canCenterVertically) {
                            transformValue += " translateY(" + translateY+ ")";
                        }
                    }

                    style.transformOrigin = "0 0";
                    style.transform = transformValue;

                    self.viewScale = desiredScale;
                    self.viewToFitWidthScale = scaleNeededToFitWidth;
                    self.viewToFitHeightScale = scaleNeededToFitHeight;
                    self.viewLeft = leftPosition;
                    self.viewTop = topPosition;

                    return scaleNeededToFitHeight;
                }

                if (scaleToFitType=="fit") {
                    //canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
                    //canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
                    canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
                    canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

                    if (hasMinimumScale) {
                        desiredScale = Math.max(desiredScale, Number(minimumScale));
                    }

                    desiredScale = self.getShortNumber(desiredScale);

                    if (isSliderChange || scaleToFit==false) {
                        canCenterVertically = scaleToFitFullHeight>=desiredScale;
                        canCenterHorizontally = desiredScale<scaleToFitFullWidth;
                    }
                    else if (scaleToFit) {
                        desiredScale = scaleNeededToFit;
                    }

                    transformValue = "scale(" + desiredScale + ")";

                    //canCenterHorizontally = self.canCenterHorizontally(view, "fit", false, desiredScale);
                    //canCenterVertically = self.canCenterVertically(view, "fit", false, desiredScale);

                    if (self.centerVertically) {
                        if (canCenterVertically) {
                            translateY = "-50%";
                            topPosition = "50%";
                        }
                        else {
                            translateY = "0";
                            topPosition = "0";
                        }

                        if (style.top != topPosition) {
                            style.top = topPosition + "";
                        }

                        if (canCenterVertically) {
                            transformValue += " translateY(" + translateY+ ")";
                        }
                    }

                    if (self.centerHorizontally) {
                        if (canCenterHorizontally) {
                            translateX = "-50%";
                            leftPosition = "50%";
                        }
                        else {
                            translateX = "0";
                            leftPosition = "0";
                        }

                        if (style.left != leftPosition) {
                            style.left = leftPosition + "";
                        }

                        if (canCenterHorizontally) {
                            transformValue += " translateX(" + translateX+ ")";
                        }
                    }

                    style.transformOrigin = "0 0";
                    style.transform = transformValue;

                    self.viewScale = desiredScale;
                    self.viewToFitWidthScale = scaleNeededToFitWidth;
                    self.viewToFitHeightScale = scaleNeededToFitHeight;
                    self.viewLeft = leftPosition;
                    self.viewTop = topPosition;

                    self.updateSliderValue(desiredScale);

                    return desiredScale;
                }

                if (scaleToFitType=="default" || scaleToFitType=="") {
                    desiredScale = 1;

                    if (hasMinimumScale) {
                        desiredScale = Math.max(desiredScale, Number(minimumScale));
                    }
                    if (hasMaximumScale) {
                        desiredScale = Math.min(desiredScale, Number(maximumScale));
                    }

                    canCenterHorizontally = self.canCenterHorizontally(view, "none", false, desiredScale, minimumScale, maximumScale);
                    canCenterVertically = self.canCenterVertically(view, "none", false, desiredScale, minimumScale, maximumScale);

                    if (self.centerVertically) {
                        if (canCenterVertically) {
                            translateY = "-50%";
                            topPosition = "50%";
                        }
                        else {
                            translateY = "0";
                            topPosition = "0";
                        }

                        if (style.top != topPosition) {
                            style.top = topPosition + "";
                        }

                        if (canCenterVertically) {
                            transformValue += " translateY(" + translateY+ ")";
                        }
                    }

                    if (self.centerHorizontally) {
                        if (canCenterHorizontally) {
                            translateX = "-50%";
                            leftPosition = "50%";
                        }
                        else {
                            translateX = "0";
                            leftPosition = "0";
                        }

                        if (style.left != leftPosition) {
                            style.left = leftPosition + "";
                        }

                        if (canCenterHorizontally) {
                            transformValue += " translateX(" + translateX+ ")";
                        }
                        else {
                            transformValue += " translateX(" + 0 + ")";
                        }
                    }

                    style.transformOrigin = "0 0";
                    style.transform = transformValue;


                    self.viewScale = desiredScale;
                    self.viewToFitWidthScale = scaleNeededToFitWidth;
                    self.viewToFitHeightScale = scaleNeededToFitHeight;
                    self.viewLeft = leftPosition;
                    self.viewTop = topPosition;

                    self.updateSliderValue(desiredScale);

                    return desiredScale;
                }
            }

            /**
             * Returns true if view can be centered horizontally
             * @param {HTMLElement} view view
             * @param {String} type type of scaling - width, height, all, none
             * @param {Boolean} scaleUp if scale up enabled
             * @param {Number} scale target scale value
             */
            self.canCenterHorizontally = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
                var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
                var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
                var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
                var canCenter = false;
                var minScale;

                type = type==null ? "none" : type;
                scale = scale==null ? scale : scaleNeededToFitWidth;
                scaleUp = scaleUp == null ? false : scaleUp;

                if (type=="width") {

                    if (scaleUp && maximumScale==null) {
                        canCenter = false;
                    }
                    else if (scaleNeededToFitWidth>=1) {
                        canCenter = true;
                    }
                }
                else if (type=="height") {
                    minScale = Math.min(1, scaleNeededToFitHeight);
                    if (minimumScale!="" && maximumScale!="") {
                        minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
                    }
                    else {
                        if (minimumScale!="") {
                            minScale = Math.max(minimumScale, scaleNeededToFitHeight);
                        }
                        if (maximumScale!="") {
                            minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
                        }
                    }

                    if (scaleUp && maximumScale=="") {
                        canCenter = false;
                    }
                    else if (scaleNeededToFitWidth>=minScale) {
                        canCenter = true;
                    }
                }
                else if (type=="fit") {
                    canCenter = scaleNeededToFitWidth>=scaleNeededToFit;
                }
                else {
                    if (scaleUp) {
                        canCenter = false;
                    }
                    else if (scaleNeededToFitWidth>=1) {
                        canCenter = true;
                    }
                }

                self.horizontalScrollbarsNeeded = canCenter;

                return canCenter;
            }

            /**
             * Returns true if view can be centered horizontally
             * @param {HTMLElement} view view to scale
             * @param {String} type type of scaling
             * @param {Boolean} scaleUp if scale up enabled
             * @param {Number} scale target scale value
             */
            self.canCenterVertically = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
                var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
                var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
                var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
                var canCenter = false;
                var minScale;

                type = type==null ? "none" : type;
                scale = scale==null ? 1 : scale;
                scaleUp = scaleUp == null ? false : scaleUp;

                if (type=="width") {
                    canCenter = scaleNeededToFitHeight>=scaleNeededToFitWidth;
                }
                else if (type=="height") {
                    minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFit));
                    canCenter = scaleNeededToFitHeight>=minScale;
                }
                else if (type=="fit") {
                    canCenter = scaleNeededToFitHeight>=scaleNeededToFit;
                }
                else {
                    if (scaleUp) {
                        canCenter = false;
                    }
                    else if (scaleNeededToFitHeight>=1) {
                        canCenter = true;
                    }
                }

                self.verticalScrollbarsNeeded = canCenter;

                return canCenter;
            }

            self.getViewFitToViewportScale = function(view, scaleUp) {
                var enableScaleUp = scaleUp;
                var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                var elementWidth = parseFloat(getComputedStyle(view, "style").width);
                var elementHeight = parseFloat(getComputedStyle(view, "style").height);
                var newScale = 1;

                // if element is not added to the document computed values are NaN
                if (isNaN(elementWidth) || isNaN(elementHeight)) {
                    return newScale;
                }

                availableWidth -= self.horizontalPadding;
                availableHeight -= self.verticalPadding;

                if (enableScaleUp) {
                    newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
                }
                else if (elementWidth > availableWidth || elementHeight > availableHeight) {
                    newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
                }

                return newScale;
            }

            self.getViewFitToViewportWidthScale = function(view, scaleUp) {
                // need to get browser viewport width when element
                var isParentWindow = view && view.parentNode && view.parentNode===document.body;
                var enableScaleUp = scaleUp;
                var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                var elementWidth = parseFloat(getComputedStyle(view, "style").width);
                var newScale = 1;

                // if element is not added to the document computed values are NaN
                if (isNaN(elementWidth)) {
                    return newScale;
                }

                availableWidth -= self.horizontalPadding;

                if (enableScaleUp) {
                    newScale = availableWidth/elementWidth;
                }
                else if (elementWidth > availableWidth) {
                    newScale = availableWidth/elementWidth;
                }

                return newScale;
            }

            self.getViewFitToViewportHeightScale = function(view, scaleUp) {
                var enableScaleUp = scaleUp;
                var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                var elementHeight = parseFloat(getComputedStyle(view, "style").height);
                var newScale = 1;

                // if element is not added to the document computed values are NaN
                if (isNaN(elementHeight)) {
                    return newScale;
                }

                availableHeight -= self.verticalPadding;

                if (enableScaleUp) {
                    newScale = availableHeight/elementHeight;
                }
                else if (elementHeight > availableHeight) {
                    newScale = availableHeight/elementHeight;
                }

                return newScale;
            }

            self.keypressHandler = function(event) {
                var rightKey = 39;
                var leftKey = 37;

                // listen for both events
                if (event.type=="keypress") {
                    window.removeEventListener("keyup", self.keypressHandler);
                }
                else {
                    window.removeEventListener("keypress", self.keypressHandler);
                }

                if (self.showNavigationControls) {
                    if (self.navigationOnKeypress) {
                        if (event.keyCode==rightKey) {
                            self.nextView();
                        }
                        if (event.keyCode==leftKey) {
                            self.previousView();
                        }
                    }
                }
                else if (self.navigationOnKeypress) {
                    if (event.keyCode==rightKey) {
                        self.nextView();
                    }
                    if (event.keyCode==leftKey) {
                        self.previousView();
                    }
                }
            }

            ///////////////////////////////////
            // GENERAL FUNCTIONS
            ///////////////////////////////////

            self.getViewById = function(id) {
                id = id ? id.replace("#", "") : "";
                var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
                return view;
            }

            self.getViewIds = function() {
                var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
                var viewId = null;

                viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

                if (viewIds.length==0) {
                    viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
                    viewIds = viewId ? [viewId] : [];
                }

                return viewIds;
            }

            self.getInitialViewId = function() {
                var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
                return viewId;
            }

            self.getApplicationStylesheet = function() {
                var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
                self.applicationStylesheet = document.getElementById("applicationStylesheet");
                return self.applicationStylesheet.sheet;
            }

            self.getVisibleView = function() {
                var viewIds = self.getViewIds();

                for (var i=0;i<viewIds.length;i++) {
                    var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
                    var view = self.getElement(viewId);
                    var postName = "_Class";

                    if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
                        view = self.getElement(viewId.replace(postName, ""));
                    }

                    if (view) {
                        var display = getComputedStyle(view).display;

                        if (display=="block" || display=="flex") {
                            return view;
                        }
                    }
                }

                return null;
            }

            self.getVisibleViews = function() {
                var viewIds = self.getViewIds();
                var views = [];

                for (var i=0;i<viewIds.length;i++) {
                    var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
                    var view = self.getElement(viewId);
                    var postName = "_Class";

                    if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
                        view = self.getElement(viewId.replace(postName, ""));
                    }

                    if (view) {
                        var display = getComputedStyle(view).display;

                        if (display=="none") {
                            continue;
                        }

                        if (display=="block" || display=="flex") {
                            views.push(view);
                        }
                    }
                }

                return views;
            }

            self.getStateNameByViewId = function(id) {
                var state = self.viewsDictionary[id];
                return state && state.stateName;
            }

            self.getMatchingViews = function(ids) {
                var views = self.addedViews.slice(0);
                var matchingViews = [];

                if (self.showByMediaQuery) {
                    for (let index = 0; index < views.length; index++) {
                        var viewId = views[index];
                        var state = self.viewsDictionary[viewId];
                        var rule = state && state.rule;
                        var matchResults = window.matchMedia(rule.conditionText);
                        var view = self.views[viewId];

                        if (matchResults.matches) {
                            if (ids==true) {
                                matchingViews.push(viewId);
                            }
                            else {
                                matchingViews.push(view);
                            }
                        }
                    }
                }

                return matchingViews;
            }

            self.ruleMatchesQuery = function(rule) {
                var result = window.matchMedia(rule.conditionText);
                return result.matches;
            }

            self.getViewsByStateName = function(stateName, matchQuery) {
                var views = self.addedViews.slice(0);
                var matchingViews = [];

                if (self.showByMediaQuery) {

                    // find state name
                    for (let index = 0; index < views.length; index++) {
                        var viewId = views[index];
                        var state = self.viewsDictionary[viewId];
                        var rule = state.rule;
                        var mediaRule = state.mediaRule;
                        var view = self.views[viewId];
                        var viewStateName = self.getStyleRuleValue(mediaRule, self.STATE_NAME, state);
                        var stateFoundAtt = view.getAttribute(self.STATE_NAME)==state;
                        var matchesResults = false;

                        if (viewStateName==stateName) {
                            if (matchQuery) {
                                matchesResults = self.ruleMatchesQuery(rule);

                                if (matchesResults) {
                                    matchingViews.push(view);
                                }
                            }
                            else {
                                matchingViews.push(view);
                            }
                        }
                    }
                }

                return matchingViews;
            }

            self.getInitialView = function() {
                var viewId = self.getInitialViewId();
                viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
                var view = self.getElement(viewId);
                var postName = "_Class";

                if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
                    view = self.getElement(viewId.replace(postName, ""));
                }

                return view;
            }

            self.getViewIndex = function(view) {
                var viewIds = self.getViewIds();
                var id = view ? view.id : null;
                var index = id && viewIds ? viewIds.indexOf(id) : -1;

                return index;
            }

            self.syncronizeViewToURL = function() {
                var fragment = self.getHashFragment();

                if (self.showByMediaQuery) {
                    var stateName = fragment;

                    if (stateName==null || stateName=="") {
                        var initialView = self.getInitialView();
                        stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
                    }

                    self.showMediaQueryViewsByState(stateName);
                    return;
                }

                var view = self.getViewById(fragment);
                var index = view ? self.getViewIndex(view) : 0;
                if (index==-1) index = 0;
                var currentView = self.hideViews(index);

                if (self.supportsPopState && currentView) {

                    if (fragment==null) {
                        window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
                    }
                    else {
                        window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
                    }
                }

                self.setViewVariables(view);
                return view;
            }

            /**
             * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
             */
            self.setViewVariables = function(view, overlay, parentView) {
                if (view) {
                    if (self.currentView) {
                        self.lastView = self.currentView;
                    }
                    self.currentView = view;
                }

                if (overlay) {
                    if (self.currentOverlay) {
                        self.lastOverlay = self.currentOverlay;
                    }
                    self.currentOverlay = overlay;
                }
            }

            self.getViewPreferenceBoolean = function(view, property, altValue) {
                var computedStyle = window.getComputedStyle(view);
                var value = computedStyle.getPropertyValue(property);
                var type = typeof value;

                if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
                    return true;
                }
                else if (value=="" && arguments.length==3) {
                    return altValue;
                }

                return false;
            }

            self.getViewPreferenceValue = function(view, property, defaultValue) {
                var value = window.getComputedStyle(view).getPropertyValue(property);

                if (value===undefined) {
                    return defaultValue;
                }

                value = value.replace(/^[\s\"]*/, "");
                value = value.replace(/[\s\"]*$/, "");
                value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) {
                    return capture;
                });

                return value;
            }

            self.getStyleRuleValue = function(cssRule, property) {
                var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

                if (value===undefined) {
                    return null;
                }

                value = value.replace(/^[\s\"]*/, "");
                value = value.replace(/[\s\"]*$/, "");
                value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) {
                    return capture;
                });

                return value;
            }

            /**
             * Get the first defined value of property. Returns empty string if not defined
             * @param {String} id id of element
             * @param {String} property
             */
            self.getCSSPropertyValueForElement = function(id, property) {
                var styleSheets = document.styleSheets;
                var numOfStylesheets = styleSheets.length;
                var values = [];
                var selectorIDText = "#" + id;
                var selectorClassText = "." + id + "_Class";
                var value;

                for(var i=0;i<numOfStylesheets;i++) {
                    var styleSheet = styleSheets[i];
                    var cssRules = self.getStylesheetRules(styleSheet);
                    var numOfCSSRules = cssRules.length;
                    var cssRule;

                    for (var j=0;j<numOfCSSRules;j++) {
                        cssRule = cssRules[j];

                        if (cssRule.media) {
                            var mediaRules = cssRule.cssRules;
                            var numOfMediaRules = mediaRules ? mediaRules.length : 0;

                            for(var k=0;k<numOfMediaRules;k++) {
                                var mediaRule = mediaRules[k];

                                if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {

                                    if (mediaRule.style && mediaRule.style.getPropertyValue(property)!="") {
                                        value = mediaRule.style.getPropertyValue(property);
                                        values.push(value);
                                    }
                                }
                            }
                        }
                        else {

                            if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
                                if (cssRule.style && cssRule.style.getPropertyValue(property)!="") {
                                    value = cssRule.style.getPropertyValue(property);
                                    values.push(value);
                                }
                            }
                        }
                    }
                }

                return values.pop();
            }

            self.getIsStyleDefined = function(id, property) {
                var value = self.getCSSPropertyValueForElement(id, property);
                return value!==undefined && value!="";
            }

            self.collectViews = function() {
                var viewIds = self.getViewIds();

                for (let index = 0; index < viewIds.length; index++) {
                    const id = viewIds[index];
                    const view = self.getElement(id);
                    self.views[id] = view;
                }

                self.viewIds = viewIds;
            }

            self.collectOverlays = function() {
                var viewIds = self.getViewIds();
                var ids = [];

                for (let index = 0; index < viewIds.length; index++) {
                    const id = viewIds[index];
                    const view = self.getViewById(id);
                    const isOverlay = view && self.isOverlay(view);

                    if (isOverlay) {
                        ids.push(id);
                        self.overlays[id] = view;
                    }
                }

                self.overlayIds = ids;
            }

            self.collectMediaQueries = function() {
                var viewIds = self.getViewIds();
                var styleSheet = self.getApplicationStylesheet();
                var cssRules = self.getStylesheetRules(styleSheet);
                var numOfCSSRules = cssRules ? cssRules.length : 0;
                var cssRule;
                var id = viewIds.length ? viewIds[0]: ""; // single view
                var selectorIDText = "#" + id;
                var selectorClassText = "." + id + "_Class";
                var viewsNotFound = viewIds.slice();
                var viewsFound = [];
                var selectorText = null;
                var property = self.prefix + "view-id";
                var stateName = self.prefix + "state";
                var stateValue = null;
                var view = null;

                for (var j=0;j<numOfCSSRules;j++) {
                    cssRule = cssRules[j];

                    if (cssRule.media) {
                        var mediaRules = cssRule.cssRules;
                        var numOfMediaRules = mediaRules ? mediaRules.length : 0;
                        var mediaViewInfoFound = false;
                        var mediaId = null;

                        for(var k=0;k<numOfMediaRules;k++) {
                            var mediaRule = mediaRules[k];

                            selectorText = mediaRule.selectorText;

                            if (selectorText==".mediaViewInfo" && mediaViewInfoFound==false) {

                                mediaId = self.getStyleRuleValue(mediaRule, property);
                                stateValue = self.getStyleRuleValue(mediaRule, stateName);

                                selectorIDText = "#" + mediaId;
                                selectorClassText = "." + mediaId + "_Class";
                                view = self.getElement(mediaId);

                                // prevent duplicates from load and domcontentloaded events
                                if (self.addedViews.indexOf(mediaId)==-1) {
                                    self.addView(view, mediaId, cssRule, mediaRule, stateValue);
                                }

                                viewsFound.push(mediaId);

                                if (viewsNotFound.indexOf(mediaId)!=-1) {
                                    viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
                                }

                                mediaViewInfoFound = true;
                            }

                            if (selectorIDText==selectorText || selectorClassText==selectorText) {
                                var styleObject = self.viewsDictionary[mediaId];
                                if (styleObject) {
                                    styleObject.styleDeclaration = mediaRule;
                                }
                                break;
                            }
                        }
                    }
                    else {
                        selectorText = cssRule.selectorText;

                        if (selectorText==null) continue;

                        selectorText = selectorText.replace(/[#|\s|*]?/g, "");

                        if (viewIds.indexOf(selectorText)!=-1) {
                            view = self.getElement(selectorText);
                            self.addView(view, selectorText, cssRule, null, stateValue);

                            if (viewsNotFound.indexOf(selectorText)!=-1) {
                                viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
                            }

                            break;
                        }
                    }
                }

                if (viewsNotFound.length) {
                    console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
                    console.log("Views found:" + viewsFound.join(",") + "");
                }
            }

            /**
             * Adds a view
             * @param {HTMLElement} view view element
             * @param {String} id id of view element
             * @param {CSSRule} cssRule of view element
             * @param {CSSMediaRule} mediaRule media rule of view element
             * @param {String} stateName name of state if applicable
             **/
            self.addView = function(view, viewId, cssRule, mediaRule, stateName) {
                var viewData = {};
                viewData.name = viewId;
                viewData.rule = cssRule;
                viewData.id = viewId;
                viewData.mediaRule = mediaRule;
                viewData.stateName = stateName;

                self.views.push(viewData);
                self.addedViews.push(viewId);
                self.viewsDictionary[viewId] = viewData;
                self.mediaQueryDictionary[viewId] = cssRule;
            }

            self.hasView = function(name) {

                if (self.addedViews.indexOf(name)!=-1) {
                    return true;
                }
                return false;
            }

            /**
             * Go to view by id. Views are added in addView()
             * @param {String} id id of view in current
             * @param {Boolean} maintainPreviousState if true then do not hide other views
             * @param {String} parent id of parent view
             **/
            self.goToView = function(id, maintainPreviousState, parent) {
                var state = self.viewsDictionary[id];

                if (state) {
                    if (maintainPreviousState==false || maintainPreviousState==null) {
                        self.hideViews();
                    }
                    self.enableMediaQuery(state.rule);
                    self.updateViewLabel();
                    self.updateURL();
                }
                else {
                    var event = new Event(self.STATE_NOT_FOUND);
                    self.stateName = id;
                    window.dispatchEvent(event);
                }
            }

            /**
             * Go to the view in the event targets CSS variable
             **/
            self.goToTargetView = function(event) {
                var button = event.currentTarget;
                var buttonComputedStyles = getComputedStyle(button);
                var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
                var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
                var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
                var targetView = self.application ? null : self.getElement(actionTargetValue);
                var targetState = targetView ? self.getStateNameByViewId(targetView.id) : null;
                var actionTargetStyles = targetView ? targetView.style : null;
                var state = self.viewsDictionary[actionTargetValue];

                // navigate to page
                if (self.application==false || targetType=="page") {
                    document.location.href = "./" + actionTargetValue;
                    return;
                }

                // if view is found
                if (targetView) {

                    if (self.currentOverlay) {
                        self.removeOverlay(false);
                    }

                    if (self.showByMediaQuery) {
                        var stateName = targetState;

                        if (stateName==null || stateName=="") {
                            var initialView = self.getInitialView();
                            stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
                        }
                        self.showMediaQueryViewsByState(stateName, event);
                        return;
                    }

                    // add animation set in event target style declaration
                    if (animation && self.supportAnimations) {
                        self.crossFade(self.currentView, targetView, false, animation);
                    }
                    else {
                        self.setViewVariables(self.currentView);
                        self.hideViews();
                        self.enableMediaQuery(state.rule);
                        self.scaleViewIfNeeded(targetView);
                        self.centerView(targetView);
                        self.updateViewLabel();
                        self.updateURL();
                    }
                }
                else {
                    var stateEvent = new Event(self.STATE_NOT_FOUND);
                    self.stateName = name;
                    window.dispatchEvent(stateEvent);
                }

                event.stopImmediatePropagation();
            }

            /**
             * Cross fade between views
             **/
            self.crossFade = function(from, to, update, animation) {
                var targetIndex = to.parentNode
                var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
                var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

                if (from.parentNode==to.parentNode) {
                    var reverse = self.getReverseAnimation(animation);
                    var duration = self.getAnimationDuration(animation, true);

                    // if target view is above (higher index)
                    // then fade in target view
                    // and after fade in then hide previous view instantly
                    if (fromIndex<toIndex) {
                        self.setElementAnimation(from, null);
                        self.setElementAnimation(to, null);
                        self.showViewByMediaQuery(to);
                        self.fadeIn(to, update, animation);

                        setTimeout(function() {
                            self.setElementAnimation(to, null);
                            self.setElementAnimation(from, null);
                            self.hideView(from);
                            self.updateURL();
                            self.setViewVariables(to);
                            self.updateViewLabel();
                        }, duration)
                    }
                        // if target view is on bottom
                        // then show target view instantly
                    // and fade out current view
                    else if (fromIndex>toIndex) {
                        self.setElementAnimation(to, null);
                        self.setElementAnimation(from, null);
                        self.showViewByMediaQuery(to);
                        self.fadeOut(from, update, reverse);

                        setTimeout(function() {
                            self.setElementAnimation(to, null);
                            self.setElementAnimation(from, null);
                            self.hideView(from);
                            self.updateURL();
                            self.setViewVariables(to);
                        }, duration)
                    }
                }
            }

            self.fadeIn = function(element, update, animation) {
                self.showViewByMediaQuery(element);

                if (update) {
                    self.updateURL(element);

                    element.addEventListener("animationend", function(event) {
                        element.style.animation = null;
                        self.setViewVariables(element);
                        self.updateViewLabel();
                        element.removeEventListener("animationend", arguments.callee);
                    });
                }

                self.setElementAnimation(element, null);

                element.style.animation = animation;
            }

            self.fadeOutCurrentView = function(animation, update) {
                if (self.currentView) {
                    self.fadeOut(self.currentView, update, animation);
                }
                if (self.currentOverlay) {
                    self.fadeOut(self.currentOverlay, update, animation);
                }
            }

            self.fadeOut = function(element, update, animation) {
                if (update) {
                    element.addEventListener("animationend", function(event) {
                        element.style.animation = null;
                        self.hideView(element);
                        element.removeEventListener("animationend", arguments.callee);
                    });
                }

                element.style.animationPlayState = "paused";
                element.style.animation = animation;
                element.style.animationPlayState = "running";
            }

            self.getReverseAnimation = function(animation) {
                if (animation && animation.indexOf("reverse")==-1) {
                    animation += " reverse";
                }

                return animation;
            }

            /**
             * Get duration in animation string
             * @param {String} animation animation value
             * @param {Boolean} inMilliseconds length in milliseconds if true
             */
            self.getAnimationDuration = function(animation, inMilliseconds) {
                var duration = 0;
                var expression = /.+(\d\.\d)s.+/;

                if (animation && animation.match(expression)) {
                    duration = parseFloat(animation.replace(expression, "$" + "1"));
                    if (duration && inMilliseconds) duration = duration * 1000;
                }

                return duration;
            }

            self.setElementAnimation = function(element, animation, priority) {
                element.style.setProperty("animation", animation, "important");
            }

            self.getElement = function(id) {
                id = id ? id.trim() : id;
                var element = id ? document.getElementById(id) : null;

                return element;
            }

            self.getElementById = function(id) {
                id = id ? id.trim() : id;
                var element = id ? document.getElementById(id) : null;

                return element;
            }

            self.getElementByClass = function(className) {
                className = className ? className.trim() : className;
                var elements = document.getElementsByClassName(className);

                return elements.length ? elements[0] : null;
            }

            self.resizeHandler = function(event) {

                if (self.showByMediaQuery) {
                    if (self.enableDeepLinking) {
                        var stateName = self.getHashFragment();

                        if (stateName==null || stateName=="") {
                            var initialView = self.getInitialView();
                            stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
                        }
                        self.showMediaQueryViewsByState(stateName, event);
                    }
                }
                else {
                    var visibleViews = self.getVisibleViews();

                    for (let index = 0; index < visibleViews.length; index++) {
                        var view = visibleViews[index];
                        self.scaleViewIfNeeded(view);
                    }
                }

                window.dispatchEvent(new Event(self.APPLICATION_RESIZE));
            }

            self.scaleViewIfNeeded = function(view) {

                if (self.scaleViewsOnResize) {
                    if (view==null) {
                        view = self.getVisibleView();
                    }

                    var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

                    if (isViewScaled) {
                        self.scaleViewToFit(view, true);
                    }
                    else {
                        self.scaleViewToActualSize(view);
                    }
                }
                else if (view) {
                    self.centerView(view);
                }
            }

            self.centerView = function(view) {

                if (self.scaleViewsToFit) {
                    self.scaleViewToFit(view, true);
                }
                else {
                    self.scaleViewToActualSize(view);  // for centering support for now
                }
            }

            self.preventDoubleClick = function(event) {
                event.stopImmediatePropagation();
            }

            self.getHashFragment = function() {
                var value = window.location.hash ? window.location.hash.replace("#", "") : "";
                return value;
            }

            self.showBlockElement = function(view) {
                view.style.display = "block";
            }

            self.hideElement = function(view) {
                view.style.display = "none";
            }

            self.showStateFunction = null;

            self.showMediaQueryViewsByState = function(state, event) {
                // browser will hide and show by media query (small, medium, large)
                // but if multiple views exists at same size user may want specific view
                // if showStateFunction is defined that is called with state fragment and user can show or hide each media matching view by returning true or false
                // if showStateFunction is not defined and state is defined and view has a defined state that matches then show that and hide other matching views
                // if no state is defined show view
                // an viewChanging event is dispatched before views are shown or hidden that can be prevented

                // get all matched queries
                // if state name is specified then show that view and hide other views
                // if no state name is defined then show
                var matchedViews = self.getMatchingViews();
                var matchMediaQuery = true;
                var foundViews = self.getViewsByStateName(state, matchMediaQuery);
                var showViews = [];
                var hideViews = [];

                // loop views that match media query
                for (let index = 0; index < matchedViews.length; index++) {
                    var view = matchedViews[index];

                    // let user determine visible view
                    if (self.showStateFunction!=null) {
                        if (self.showStateFunction(view, state)) {
                            showViews.push(view);
                        }
                        else {
                            hideViews.push(view);
                        }
                    }
                    // state was defined so check if view matches state
                    else if (foundViews.length) {

                        if (foundViews.indexOf(view)!=-1) {
                            showViews.push(view);
                        }
                        else {
                            hideViews.push(view);
                        }
                    }
                    // if no state names are defined show view (define unused state name to exclude)
                    else if (state==null || state=="") {
                        showViews.push(view);
                    }
                }

                if (showViews.length) {
                    var viewChangingEvent = new Event(self.VIEW_CHANGING);
                    viewChangingEvent.showViews = showViews;
                    viewChangingEvent.hideViews = hideViews;
                    window.dispatchEvent(viewChangingEvent);

                    if (viewChangingEvent.defaultPrevented==false) {
                        for (var index = 0; index < hideViews.length; index++) {
                            var view = hideViews[index];

                            if (self.isOverlay(view)) {
                                self.removeOverlay(view);
                            }
                            else {
                                self.hideElement(view);
                            }
                        }

                        for (var index = 0; index < showViews.length; index++) {
                            var view = showViews[index];

                            if (index==showViews.length-1) {
                                self.clearDisplay(view);
                                self.setViewOptions(view);
                                self.setViewVariables(view);
                                self.centerView(view);
                                self.updateURLState(view, state);
                            }
                        }
                    }

                    var viewChangeEvent = new Event(self.VIEW_CHANGE);
                    viewChangeEvent.showViews = showViews;
                    viewChangeEvent.hideViews = hideViews;
                    window.dispatchEvent(viewChangeEvent);
                }

            }

            self.clearDisplay = function(view) {
                view.style.setProperty("display", null);
            }

            self.hashChangeHandler = function(event) {
                var fragment = self.getHashFragment();
                var view = self.getViewById(fragment);

                if (self.showByMediaQuery) {
                    var stateName = fragment;

                    if (stateName==null || stateName=="") {
                        var initialView = self.getInitialView();
                        stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
                    }
                    self.showMediaQueryViewsByState(stateName);
                }
                else {
                    if (view) {
                        self.hideViews();
                        self.showView(view);
                        self.setViewVariables(view);
                        self.updateViewLabel();

                        window.dispatchEvent(new Event(self.VIEW_CHANGE));
                    }
                    else {
                        window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
                    }
                }
            }

            self.popStateHandler = function(event) {
                var state = event.state;
                var fragment = state ? state.name : window.location.hash;
                var view = self.getViewById(fragment);

                if (view) {
                    self.hideViews();
                    self.showView(view);
                    self.updateViewLabel();
                }
                else {
                    window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
                }
            }

            self.doubleClickHandler = function(event) {
                var view = self.getVisibleView();
                var scaleValue = view ? self.getViewScaleValue(view) : 1;
                var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
                var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
                var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
                var scaleToFitType = self.scaleToFitType;

                // Three scenarios
                // - scale to fit on double click
                // - set scale to actual size on double click
                // - switch between scale to fit and actual page size

                if (scaleToFitType=="width") {
                    scaleNeededToFit = scaleNeededToFitWidth;
                }
                else if (scaleToFitType=="height") {
                    scaleNeededToFit = scaleNeededToFitHeight;
                }

                // if scale and actual size enabled then switch between
                if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
                    var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
                    var isScaled = false;

                    // if scale is not 1 then view needs scaling
                    if (scaleNeededToFit!=1) {

                        // if current scale is at 1 it is at actual size
                        // scale it to fit
                        if (scaleValue==1) {
                            self.scaleViewToFit(view);
                            isScaled = true;
                        }
                        else {
                            // scale is not at 1 so switch to actual size
                            self.scaleViewToActualSize(view);
                            isScaled = false;
                        }
                    }
                    else {
                        // view is smaller than viewport
                        // so scale to fit() is scale actual size
                        // actual size and scaled size are the same
                        // but call scale to fit to retain centering
                        self.scaleViewToFit(view);
                        isScaled = false;
                    }

                    view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
                    isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
                }
                else if (self.scaleToFitOnDoubleClick) {
                    self.scaleViewToFit(view);
                }
                else if (self.actualSizeOnDoubleClick) {
                    self.scaleViewToActualSize(view);
                }

            }

            self.scaleViewToFit = function(view) {
                return self.setViewScaleValue(view, true);
            }

            self.scaleViewToActualSize = function(view) {
                self.setViewScaleValue(view, false, 1);
            }

            self.onloadHandler = function(event) {
                self.initialize();
            }

            self.setElementHTML = function(id, value) {
                var element = self.getElement(id);
                element.innerHTML = value;
            }

            self.getStackArray = function(error) {
                var value = "";

                if (error==null) {
                    try {
                        error = new Error("Stack");
                    }
                    catch (e) {

                    }
                }

                if ("stack" in error) {
                    value = error.stack;
                    var methods = value.split(/\n/g);

                    var newArray = methods ? methods.map(function (value, index, array) {
                        value = value.replace(/\@.*/,"");
                        return value;
                    }) : null;

                    if (newArray && newArray[0].includes("getStackTrace")) {
                        newArray.shift();
                    }
                    if (newArray && newArray[0].includes("getStackArray")) {
                        newArray.shift();
                    }
                    if (newArray && newArray[0]=="") {
                        newArray.shift();
                    }

                    return newArray;
                }

                return null;
            }

            self.log = function(value) {
                console.log.apply(this, [value]);
            }

            // initialize on load
            // sometimes the body size is 0 so we call this now and again later
            window.addEventListener("load", self.onloadHandler);
            window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
        }

        window.application = new Application();
    </script>
    <link href="{{asset('css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="Invoice">
    <svg class="Rectangle_38">
        <rect id="Rectangle_38" rx="0" ry="0" x="0" y="0" width="591" height="837">
        </rect>
    </svg>
    <div id="Billing_From">
        <div id="Billing_From_i">
            <span>Billi</span><span style="letter-spacing:0.05px;">n</span><span>g </span><span style="letter-spacing:-0.09px;">F</span><span style="letter-spacing:-0.08px;">r</span><span>om</span>
        </div>
        <div id="SKY_HEIGHTS_REAL_ESTATE_LIMITE">
            <span>S</span><span style="letter-spacing:-0.5px;">K</span><span>Y HEIGH</span><span style="letter-spacing:-0.05px;">T</span><span>S REAL E</span><span style="letter-spacing:-0.09px;">S</span><span style="letter-spacing:-0.34px;">T</span><span style="letter-spacing:-0.35px;">A</span><span>TE LIMITED</span>
        </div>
        <div id="Address-House_2_Road_8_Block_D">
            <span>A</span><span>dd</span><span style="letter-spacing:-0.12px;">r</span><span>ess-House </span><span style="letter-spacing:0.1px;">2</span><span>, R</span><span style="letter-spacing:-0.02px;">o</span><span style="letter-spacing:0.02px;">a</span><span>d </span><span style="letter-spacing:0.1px;">8</span><span>, Blo</span><span style="letter-spacing:-0.07px;">c</span><span>k </span><span style="letter-spacing:-0.19px;">D</span><span>, Banas</span><span style="letter-spacing:-0.12px;">r</span><span>ee,</span>
        </div>
        <div id="Rampura_Dhaka-1219_Bangladesh">
            <span>R</span><span>ampu</span><span style="letter-spacing:-0.08px;">r</span><span>a, Dha</span><span style="letter-spacing:-0.1px;">k</span><span>a</span><span style="letter-spacing:-0.16px;">-</span><span>121</span><span style="letter-spacing:-0.11px;">9</span><span>, Ba</span><span style="letter-spacing:0.02px;">n</span><span>gl</span><span style="letter-spacing:0.02px;">a</span><span>desh.</span>
        </div>
        <div id="Mobile_8801312570561____880131">
            <span>Mobile: +88</span><span style="letter-spacing:-0.01px;">0</span><span>1312</span><span style="letter-spacing:-0.14px;">5</span><span style="letter-spacing:-0.19px;">7</span><span>0561  |  +88</span><span style="letter-spacing:-0.02px;">0</span><span>1312</span><span style="letter-spacing:-0.13px;">5</span><span style="letter-spacing:-0.19px;">7</span><span>0565  </span>
        </div>
        <div id="Email_skyheightsltdgmailcom">
            <span>Email: <span>skyheightsltd@outlook.com</span>
        </div>
        <div id="Website_www_xyzcom">
            <span>W</span><span>ebsi</span><span style="letter-spacing:-0.18px;">t</span><span>e: </span><span>skyheightsrealestate.com.bd</span>
        </div>
    </div>
    <div id="Invoice_No">
        <div id="Invoice_No_q">
            <span>I</span><span style="letter-spacing:-0.1px;">n</span><span style="letter-spacing:-0.14px;">v</span><span>oi</span><span style="letter-spacing:-0.06px;">c</span><span>e N</span><span style="letter-spacing:-0.06px;">o</span><span>.</span>
        </div>
        <div id="n_0220324-004">
            <span style="font-family:Montserrat-Bold;font-style:normal;font-weight:normal;font-size:12px; margin-left: 10px">{{$invoice->invoice_no}}</span>
        </div>
    </div>
    <div id="Invoice_Date">
        <div id="Invoice_Date_t">
            <span>I</span><span style="letter-spacing:-0.1px;">n</span><span style="letter-spacing:-0.14px;">v</span><span>oi</span><span style="letter-spacing:-0.06px;">c</span><span>e Da</span><span style="letter-spacing:-0.17px;">t</span><span>e</span>
        </div>
        <div id="n_4032022">
            <span>{{date_format(date_create($invoice->created_at),'d/m/Y')}}</span>
        </div>
    </div>
    <div id="Received_From">
        <div id="Received_From_w">
            @if($invoice->is_checkin)
                <span>Received From</span>
            @else
                <span>Pay To</span>
            @endif
        </div>
        <div id="Sheikh_Raiyan_Huq">
            <span>{{$invoice->person_name}}</span>
        </div>
        <div id="n_1771572473">
            <span>{{$invoice->person_phone}}</span>
        </div>
    </div>
    <div id="Acount_Head">
        <div id="Account_Head">
            <span>A</span><span style="letter-spacing:-0.06px;">cc</span><span>ount H</span><span style="letter-spacing:-0.14px;">e</span><span style="letter-spacing:0.05px;">a</span><span>d</span>
        </div>
        <div id="Raiyan_Sheikh__Huq">
            @if ($invoice->project_id == 0)
                <span>Office</span>
            @else
                <span>{{ucwords($invoice->project->name)}}</span>
            @endif
        </div>
    </div>
    <div id="Payment_Method">
        <div id="Payment_Method_">
            <span>P</span><span style="letter-spacing:-0.09px;">a</span><span>y</span><span style="letter-spacing:0.05px;">m</span><span>ent Met</span><span style="letter-spacing:0.06px;">h</span><span>od</span>
        </div>
        <div id="CHEQUE">
            <span>{{ucfirst($invoice->PaymentMethod->title)}}</span>
        </div>
    </div>
    <div id="Taka_Received_by">
        <div id="Taka_received_by">
            @if($invoice->is_checkin)
                <span>Received By - </span>
            @else
                <span>Paid By - </span>
            @endif
        </div>
        <div id="n_test_user">
            <span style="margin-left: -25px;">{{ucfirst($invoice->created_by)}}</span>
        </div>
    </div>
    <div id="Signature">
        <div id="Thank_you_for_your_business">
            <span style="margin-left: 18px;">Thank </span><span style="letter-spacing:-0.15px;">y</span><span>ou </span><span style="letter-spacing:-0.06px;">f</span><span>or </span><span style="letter-spacing:-0.14px;">y</span><span>our busi</span><span style="letter-spacing:0.06px;">n</span><span>ess</span>
        </div>
        <div id="Chief_Accountant">
            <span style="margin-left: 10px;">Chief </span><span style="letter-spacing:-0.04px;">A</span><span style="letter-spacing:-0.06px;">cc</span><span>ountant</span>
        </div>
        <div id="Managing_Director">
            <span style="margin-left: 10px;">Man</span><span style="letter-spacing:0.06px;">a</span><span>gi</span><span style="letter-spacing:0.06px;">n</span><span>g Di</span><span style="letter-spacing:-0.08px;">r</span><span>e</span><span style="letter-spacing:0.08px;">c</span><span style="letter-spacing:-0.16px;">t</span><span>or</span>
        </div>
        <div id="Chairman">
            <span style="margin-left: 5px;">Chai</span><span style="letter-spacing:-0.04px;">r</span><span>man</span>
        </div>
        <svg class="Rectangle_32">
            <rect id="Rectangle_32" rx="0" ry="0" x="0" y="0" width="191.449" height="0.882">
            </rect>
        </svg>
        <div id="Receiver_Signature">
            <span style="margin-left: 10px;">Re</span><span style="letter-spacing:-0.06px;">c</span><span>ei</span><span style="letter-spacing:-0.14px;">v</span><span>er Signatu</span><span style="letter-spacing:-0.08px;">r</span><span>e</span>
        </div>
        <svg class="Rectangle_33">
            <rect id="Rectangle_33" rx="0" ry="0" x="0" y="0" width="116.686" height="66.897">
            </rect>
        </svg>
        <svg class="Rectangle_26">
            <rect id="Rectangle_26" rx="0" ry="0" x="0" y="0" width="116.69" height="0.882">
            </rect>
        </svg>
        <svg class="Rectangle_39">
            <rect id="Rectangle_39" rx="0" ry="0" x="0" y="0" width="115.686" height="66.897">
            </rect>
        </svg>
        <svg class="Rectangle_40">
            <rect id="Rectangle_40" rx="0" ry="0" x="0" y="0" width="115.69" height="0.882">
            </rect>
        </svg>
        <svg class="Rectangle_41">
            <rect id="Rectangle_41" rx="0" ry="0" x="0" y="0" width="116.686" height="66.897">
            </rect>
        </svg>
        <svg class="Rectangle_42">
            <rect id="Rectangle_42" rx="0" ry="0" x="0" y="0" width="116.343" height="0.882">
            </rect>
        </svg>
        <svg class="Rectangle_43">
            <rect id="Rectangle_43" rx="0" ry="0" x="0" y="0" width="115.686" height="66.897">
            </rect>
        </svg>
        <svg class="Rectangle_44">
            <rect id="Rectangle_44" rx="0" ry="0" x="0" y="0" width="115.69" height="0.882">
            </rect>
        </svg>
    </div>
    <div id="Header">
        <svg class="Rectangle_7">
            <rect id="Rectangle_7" rx="0" ry="0" x="0" y="0" width="3.697" height="26.652">
            </rect>
        </svg>
        <svg class="Path_1" viewBox="401.453 15 17.627 26.652">
            <path id="Path_1" d="M 419.0805969238281 41.65237426757812 L 415.3836975097656 41.65237426757812 L 405.2799682617188 21.82846832275391 L 405.1678466796875 21.8653392791748 L 405.1678466796875 41.65237426757812 L 401.4532775878906 41.65237426757812 L 401.4532775878906 15.00042724609375 L 405.1678466796875 15.00042724609375 L 415.2716064453125 34.76976776123047 L 415.3836975097656 34.7328987121582 L 415.3836975097656 15.00042724609375 L 419.0805969238281 15.00042724609375 L 419.0805969238281 41.65237426757812 Z">
            </path>
        </svg>
        <svg class="Path_2" viewBox="429.495 15.001 19.605 26.652">
            <path id="Path_2" d="M 438.8661804199219 35.75910186767578 L 439.2320251464844 37.31399917602539 L 439.3441467285156 37.31399917602539 L 439.7277221679688 35.77683639526367 L 445.1638793945312 15.00067138671875 L 449.0997314453125 15.00067138671875 L 441.0834045410156 41.65261840820312 L 437.4927368164062 41.65261840820312 L 429.494873046875 15.00067138671875 L 433.4506530761719 15.00067138671875 L 438.8661804199219 35.75910186767578 Z">
            </path>
        </svg>
        <svg class="Path_3" viewBox="458.603 14.481 17.884 27.419">
            <path id="Path_3" d="M 476.4869995117188 31.87008285522461 C 476.4869995117188 35.03072738647461 475.6712341308594 37.49285888671875 474.0337219238281 39.25647735595703 C 472.3992004394531 41.01935577392578 470.2099609375 41.90005874633789 467.4638671875 41.90005874633789 C 464.7538757324219 41.90005874633789 462.60009765625 41.01935577392578 461.0009460449219 39.25647735595703 C 459.4040222167969 37.49285888671875 458.6029968261719 35.03072738647461 458.6029968261719 31.87008285522461 L 458.6029968261719 24.54785919189453 C 458.6029968261719 21.40048980712891 459.4040222167969 18.9354076385498 461.0112915039062 17.15261268615723 C 462.6155700683594 15.37202835083008 464.7671508789062 14.48099899291992 467.4638671875 14.48099899291992 C 470.1944885253906 14.48099899291992 472.3836975097656 15.37202835083008 474.0234069824219 17.15261268615723 C 475.6660461425781 18.9354076385498 476.4869995117188 21.40048980712891 476.4869995117188 24.54785919189453 L 476.4869995117188 31.87008285522461 Z M 472.7886352539062 24.49327659606934 C 472.7886352539062 22.17424011230469 472.325439453125 20.41504669189453 471.3997192382812 19.21201133728027 C 470.4688720703125 18.01118659973145 469.1574096679688 17.41003608703613 467.4638671875 17.41003608703613 C 465.7909545898438 17.41003608703613 464.5097351074219 18.01118659973145 463.6194458007812 19.21201133728027 C 462.7298889160156 20.41504669189453 462.2821655273438 22.17424011230469 462.2821655273438 24.49327659606934 L 462.2821655273438 31.87008285522461 C 462.2821655273438 34.21345901489258 462.7298889160156 35.98887634277344 463.6297912597656 37.19707870483398 C 464.5252380371094 38.404541015625 465.8034973144531 39.00864028930664 467.4638671875 39.00864028930664 C 469.1721496582031 39.00864028930664 470.4843444824219 38.40822601318359 471.4071044921875 37.20592880249023 C 472.3305969238281 36.00436782836914 472.7886352539062 34.22599792480469 472.7886352539062 31.87008285522461 L 472.7886352539062 24.49327659606934 Z">
            </path>
        </svg>
        <svg class="Rectangle_8">
            <rect id="Rectangle_8" rx="0" ry="0" x="0" y="0" width="3.697" height="26.652">
            </rect>
        </svg>
        <svg class="Rectangle_46">
            <rect id="Rectangle_46" rx="0" ry="0" x="0" y="0" width="221" height="26">
            </rect>
        </svg>
        <svg class="Rectangle_47">
            <rect id="Rectangle_47" rx="0" ry="0" x="0" y="0" width="222" height="26">
            </rect>
        </svg>
        <svg class="Path_4" viewBox="500.195 14.48 16.676 27.42">
            <path id="Path_4" d="M 516.8147583007812 33.42543411254883 L 516.8707885742188 33.53459930419922 C 516.8582763671875 36.19588851928711 516.148681640625 38.25528335571289 514.7479858398438 39.71353149414062 C 513.3442993164062 41.17104339599609 511.3609008789062 41.89979934692383 508.7984619140625 41.89979934692383 C 506.1873168945312 41.89979934692383 504.0999145507812 41.02130889892578 502.5383911132812 39.26433181762695 C 500.9754028320312 37.50735092163086 500.1950073242188 35.05406951904297 500.1950073242188 31.90596199035645 L 500.1950073242188 24.50997734069824 C 500.1950073242188 21.36260986328125 500.965087890625 18.90416717529297 502.5111083984375 17.13464736938477 C 504.0541381835938 15.36512756347656 506.113525390625 14.47999954223633 508.6892700195312 14.47999954223633 C 511.3004150390625 14.47999954223633 513.3059692382812 15.19326496124268 514.7095947265625 16.62201118469238 C 516.11328125 18.05001640319824 516.8353881835938 20.1359691619873 516.8707885742188 22.882080078125 L 516.8147583007812 22.99124526977539 L 513.30078125 22.99124526977539 C 513.265380859375 21.03806304931641 512.87890625 19.60194206237793 512.1471557617188 18.67993354797363 C 511.4147338867188 17.7601375579834 510.2625732421875 17.29839706420898 508.6892700195312 17.29839706420898 C 507.1631469726562 17.29839706420898 505.9785766601562 17.9165096282959 505.136962890625 19.15052604675293 C 504.2953491210938 20.38454246520996 503.8734741210938 22.14594650268555 503.8734741210938 24.43105506896973 L 503.8734741210938 31.89342308044434 C 503.8734741210938 34.21614837646484 504.3056640625 35.9945182800293 505.1649780273438 37.22927093505859 C 506.0242919921875 38.46328735351562 507.2347412109375 39.08140563964844 508.7984619140625 39.08140563964844 C 510.3363647460938 39.08140563964844 511.4605102539062 38.6322021484375 512.1774291992188 37.73600769042969 C 512.8892211914062 36.83907699584961 513.258056640625 35.4022216796875 513.2831420898438 33.42543411254883 L 516.8147583007812 33.42543411254883 Z">
            </path>
        </svg>
        <svg class="Path_5" viewBox="528.264 15.001 15.173 26.651">
            <path id="Path_5" d="M 541.8659057617188 29.26049423217773 L 531.98046875 29.26049423217773 L 531.98046875 38.83389282226562 L 543.4369506835938 38.83389282226562 L 543.4369506835938 41.65232467651367 L 528.263671875 41.65232467651367 L 528.263671875 15.0010986328125 L 543.3278198242188 15.0010986328125 L 543.3278198242188 17.82024765014648 L 531.98046875 17.82024765014648 L 531.98046875 26.44210815429688 L 541.8659057617188 26.44210815429688 L 541.8659057617188 29.26049423217773 Z">
            </path>
        </svg>
    </div>
    <div id="Description">
        <svg class="Rectangle_45">
            <rect id="Rectangle_45" rx="0" ry="0" x="0" y="0" width="502" height="27">
            </rect>
        </svg>
        <svg class="Rectangle_1">
            <rect id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="502.339" height="84.916">
            </rect>
        </svg>
        <div id="Description_p">
            @if ($invoice->has('materials'))
                @foreach($invoice->materials as $m)
                    <span>{{$m->title}} X {{$m->pivot->qty}}{{$m->unit}}</span>
                @endforeach
                <br><span>{{$invoice->description}}</span>
            @else
                <span>{{$invoice->description}}</span>
            @endif
        </div>
        <div id="AmountP">
            <span>{{$invoice->amount}}</span>
        </div>
        <svg class="Rectangle_2">
            <rect id="Rectangle_2" rx="0" ry="0" x="0" y="0" width="502.339" height="26.696">
            </rect>
        </svg>
        <div id="Description_b">
            <span>Desc</span><span style="letter-spacing:-0.03px;">r</span><span>iption</span>
        </div>
        <svg class="Rectangle_20">
            <rect id="Rectangle_20" rx="0" ry="0" x="0" y="0" width="1.019" height="84.742">
            </rect>
        </svg>
        <div id="Amount">
            <span>A</span><span style="letter-spacing:0.06px;">m</span><span>ount</span>
        </div>
        <svg class="Rectangle_23">
            <rect id="Rectangle_23" rx="0" ry="0" x="0" y="0" width="1.019" height="26.696">
            </rect>
        </svg>
    </div>
    <svg class="Rectangle_27">
        <rect id="Rectangle_27" rx="0" ry="0" x="0" y="0" width="600.936" height="810.37">
        </rect>
    </svg>
    <div id="Logo">
        <svg class="Rectangle_4">
            <rect id="Rectangle_4" rx="0" ry="0" x="0" y="0" width="600.936" height="810.37">
            </rect>
        </svg>
        <svg class="Path_6" viewBox="101.278 0 22.538 37.375">
            <path id="Path_6" d="M 123.8163986206055 8.740478515625 L 123.8163986206055 0.00048828125 L 115.5753936767578 6.78448486328125 L 115.5753936767578 16.69049072265625 L 109.561393737793 11.75848388671875 L 109.561393737793 22.8704833984375 L 103.9633941650391 18.33453369140625 L 103.9633941650391 29.238525390625 L 101.2783966064453 29.238525390625 L 101.2783966064453 37.37548828125 L 102.1113967895508 37.37548828125 L 102.1113967895508 29.967529296875 L 103.9213943481445 29.967529296875 L 103.9213943481445 37.37548828125 L 104.7123947143555 37.37548828125 L 104.7123947143555 19.91552734375 L 109.5583953857422 23.92449951171875 L 109.5583953857422 30.20648193359375 L 110.3003921508789 29.5665283203125 L 110.3003921508789 13.38153076171875 L 117.8073959350586 19.62451171875 L 117.8073959350586 22.83953857421875 L 118.6193923950195 23.323486328125 L 118.6193923950195 19.2344970703125 L 116.3243942260742 17.34552001953125 L 116.3243942260742 13.8494873046875 L 117.6983947753906 12.69451904296875 L 117.6983947753906 11.71148681640625 L 116.2933959960938 12.85052490234375 L 116.2933959960938 10.4935302734375 L 117.6513977050781 9.385498046875 L 117.6513977050781 8.4954833984375 L 116.2313919067383 9.635498046875 L 116.2313919067383 7.32550048828125 L 123.0823974609375 1.75347900390625 L 123.0823974609375 9.3544921875 L 123.8163986206055 8.740478515625 Z">
            </path>
        </svg>
        <svg class="Path_7" viewBox="112.412 17.523 0.749 10.301">
            <path id="Path_7" d="M 112.4122009277344 17.52252197265625 L 112.4122009277344 27.82354736328125 L 113.1611938476562 27.19952392578125 L 113.1611938476562 18.12652587890625 L 112.4122009277344 17.52252197265625 Z">
            </path>
        </svg>
        <svg class="Path_8" viewBox="114.993 19.708 0.749 5.952">
            <path id="Path_8" d="M 114.9926986694336 19.70758056640625 L 114.9926986694336 25.65960693359375 L 115.7416915893555 25.11859130859375 L 115.7416915893555 20.29058837890625 L 114.9926986694336 19.70758056640625 Z">
            </path>
        </svg>
        <svg class="Path_9" viewBox="106.726 24.026 0.78 13.35">
            <path id="Path_9" d="M 106.725700378418 24.02581787109375 L 106.725700378418 37.3758544921875 L 107.5056991577148 37.3758544921875 L 107.5056991577148 24.71282958984375 L 106.725700378418 24.02581787109375 Z">
            </path>
        </svg>
        <svg class="Path_10" viewBox="120.945 9.635 14.312 27.704">
            <path id="Path_10" d="M 120.9445037841797 25.2744140625 L 120.9445037841797 13.31842041015625 L 125.4085006713867 9.63543701171875 L 129.7164916992188 13.2564697265625 L 129.7164916992188 20.888427734375 L 135.2565002441406 20.888427734375 L 135.2565002441406 37.33941650390625 L 134.5074920654297 37.33941650390625 L 134.5074920654297 21.6534423828125 L 129.7314910888672 21.6534423828125 L 129.7314910888672 28.61444091796875 L 131.6985015869141 28.61444091796875 L 131.6985015869141 37.33941650390625 L 130.9804992675781 37.33941650390625 L 130.9804992675781 29.34844970703125 L 125.9704971313477 29.34844970703125 L 125.0644989013672 28.64544677734375 L 129.0455017089844 28.64544677734375 L 129.0455017089844 23.60443115234375 L 127.671501159668 22.54345703125 L 127.671501159668 21.4814453125 L 128.9984893798828 22.58941650390625 L 128.9984893798828 20.13946533203125 L 127.5934982299805 19.1014404296875 L 127.5934982299805 18.11846923828125 L 128.9664916992188 19.14044189453125 L 128.9664916992188 16.8304443359375 L 127.6484985351562 15.89447021484375 L 127.6484985351562 14.97344970703125 L 128.927490234375 15.90142822265625 L 128.927490234375 13.638427734375 L 125.7285003662109 11.0244140625 L 125.7285003662109 25.90643310546875 L 124.9794998168945 25.2044677734375 L 124.9794998168945 11.00146484375 L 121.7245025634766 13.62347412109375 L 121.7245025634766 16.01947021484375 L 122.9964981079102 15.0274658203125 L 122.9964981079102 15.96441650390625 L 121.7245025634766 16.97845458984375 L 121.7245025634766 19.3824462890625 L 122.973503112793 18.44647216796875 L 122.973503112793 19.304443359375 L 121.7174987792969 20.2254638671875 L 121.7174987792969 25.9144287109375 L 120.9445037841797 25.2744140625 Z">
            </path>
        </svg>
        <svg class="Path_11" viewBox="119.337 6.545 0.687 5.65">
            <path id="Path_11" d="M 120.0236968994141 6.544921875 L 120.0236968994141 11.6639404296875 L 119.3366928100586 12.1949462890625 L 119.3366928100586 7.0289306640625 L 120.0236968994141 6.544921875 Z">
            </path>
        </svg>
        <svg class="Rectangle_9">
            <rect id="Rectangle_9" rx="0" ry="0" x="0" y="0" width="45.7" height="0.791">
            </rect>
        </svg>
        <svg class="Rectangle_10">
            <rect id="Rectangle_10" rx="0" ry="0" x="0" y="0" width="56.896" height="0.791">
            </rect>
        </svg>
        <svg class="Path_12" viewBox="101.279 25.452 33.978 14.463">
            <path id="Path_12" d="M 101.2786026000977 39.24871826171875 L 110.6645965576172 39.24871826171875 L 110.6645965576172 31.73577880859375 L 118.2595977783203 25.45172119140625 L 125.7936019897461 31.69476318359375 L 125.7936019897461 39.24871826171875 L 135.256591796875 39.24871826171875 L 135.256591796875 39.91473388671875 L 125.1426010131836 39.91473388671875 L 125.1426010131836 32.0947265625 L 118.2676010131836 26.49176025390625 L 111.3926010131836 32.03277587890625 L 111.3926010131836 39.91473388671875 L 101.2786026000977 39.91473388671875 L 101.2786026000977 39.24871826171875 Z">
            </path>
        </svg>
        <svg class="Rectangle_11">
            <rect id="Rectangle_11" rx="0" ry="0" x="0" y="0" width="0.656" height="0.656">
            </rect>
        </svg>
        <svg class="Rectangle_12">
            <rect id="Rectangle_12" rx="0" ry="0" x="0" y="0" width="0.656" height="0.656">
            </rect>
        </svg>
        <svg class="Rectangle_13">
            <rect id="Rectangle_13" rx="0" ry="0" x="0" y="0" width="0.656" height="0.656">
            </rect>
        </svg>
        <svg class="Rectangle_14">
            <rect id="Rectangle_14" rx="0" ry="0" x="0" y="0" width="0.656" height="0.656">
            </rect>
        </svg>
        <svg class="Path_13" viewBox="68.707 47.549 7.343 9.756">
            <path id="Path_13" d="M 68.70700073242188 55.7869987487793 L 69.70999908447266 54.59500122070312 C 70.61699676513672 55.38100051879883 71.53900146484375 55.82799911499023 72.70400238037109 55.82799911499023 C 73.73400115966797 55.82799911499023 74.38400268554688 55.34000015258789 74.38400268554688 54.6349983215332 L 74.38400268554688 54.60800170898438 C 74.38400268554688 53.93099975585938 74.00499725341797 53.56499862670898 72.24299621582031 53.15900039672852 C 70.2239990234375 52.67100143432617 69.08599853515625 52.07500076293945 69.08599853515625 50.32699966430664 L 69.08599853515625 50.29999923706055 C 69.08599853515625 48.67399978637695 70.44100189208984 47.54899978637695 72.32499694824219 47.54899978637695 C 73.70700073242188 47.54899978637695 74.80400085449219 47.96900177001953 75.76599884033203 48.74200057983398 L 74.87200164794922 50.00199890136719 C 74.01799774169922 49.3650016784668 73.16500091552734 49.0260009765625 72.2969970703125 49.0260009765625 C 71.32199859619141 49.0260009765625 70.75299835205078 49.52799987792969 70.75299835205078 50.1510009765625 L 70.75299835205078 50.17800140380859 C 70.75299835205078 50.90999984741211 71.18599700927734 51.23500061035156 73.01599884033203 51.66799926757812 C 75.02100372314453 52.15599822998047 76.05000305175781 52.87400054931641 76.05000305175781 54.44599914550781 L 76.05000305175781 54.47299957275391 C 76.05000305175781 56.24800109863281 74.65499877929688 57.30500030517578 72.66300201416016 57.30500030517578 C 71.21399688720703 57.30500030517578 69.84500122070312 56.80300140380859 68.70700073242188 55.7869987487793">
            </path>
        </svg>
        <svg class="Path_14" viewBox="78.692 47.685 8.414 9.484">
            <path id="Path_14" d="M 78.69190216064453 47.6851806640625 L 80.35789489746094 47.6851806640625 L 80.35789489746094 52.4542236328125 L 84.86989593505859 47.6851806640625 L 86.92990112304688 47.6851806640625 L 82.972900390625 51.76318359375 L 87.10589599609375 57.169189453125 L 85.07289886474609 57.169189453125 L 81.83489990234375 52.90118408203125 L 80.35789489746094 54.419189453125 L 80.35789489746094 57.169189453125 L 78.69190216064453 57.169189453125 L 78.69190216064453 47.6851806640625 Z">
            </path>
        </svg>
        <svg class="Path_15" viewBox="87.782 47.685 9.214 9.485">
            <path id="Path_15" d="M 91.54949951171875 53.4298095703125 L 87.78249359130859 47.684814453125 L 89.76149749755859 47.684814453125 L 92.40349578857422 51.871826171875 L 95.08549499511719 47.684814453125 L 96.99649810791016 47.684814453125 L 93.2294921875 53.38983154296875 L 93.2294921875 57.16986083984375 L 91.54949951171875 57.16986083984375 L 91.54949951171875 53.4298095703125 Z">
            </path>
        </svg>
        <svg class="Path_16" viewBox="103.878 47.685 7.858 9.484">
            <path id="Path_16" d="M 103.8784027099609 47.6851806640625 L 105.5443954467773 47.6851806640625 L 105.5443954467773 51.62823486328125 L 110.0703964233398 51.62823486328125 L 110.0703964233398 47.6851806640625 L 111.7363967895508 47.6851806640625 L 111.7363967895508 57.169189453125 L 110.0703964233398 57.169189453125 L 110.0703964233398 53.1722412109375 L 105.5443954467773 53.1722412109375 L 105.5443954467773 57.169189453125 L 103.8784027099609 57.169189453125 L 103.8784027099609 47.6851806640625 Z">
            </path>
        </svg>
        <svg class="Path_17" viewBox="114.853 47.685 7.099 9.484">
            <path id="Path_17" d="M 114.8526000976562 47.6851806640625 L 121.8845977783203 47.6851806640625 L 121.8845977783203 49.17523193359375 L 116.5195999145508 49.17523193359375 L 116.5195999145508 51.6412353515625 L 121.2745971679688 51.6412353515625 L 121.2745971679688 53.1322021484375 L 116.5195999145508 53.1322021484375 L 116.5195999145508 55.67919921875 L 121.9515991210938 55.67919921875 L 121.9515991210938 57.169189453125 L 114.8526000976562 57.169189453125 L 114.8526000976562 47.6851806640625 Z">
            </path>
        </svg>
        <svg class="Rectangle_15">
            <rect id="Rectangle_15" rx="0" ry="0" x="0" y="0" width="1.666" height="9.484">
            </rect>
        </svg>
        <svg class="Path_18" viewBox="129.16 47.522 8.874 9.81">
            <path id="Path_18" d="M 129.1600036621094 52.45399856567383 L 129.1600036621094 52.42699813842773 C 129.1600036621094 49.77099990844727 131.1920013427734 47.52199935913086 134.0509948730469 47.52199935913086 C 135.7039947509766 47.52199935913086 136.7200012207031 47.98300170898438 137.6959991455078 48.80899810791016 L 136.6390075683594 50.06999969482422 C 135.9069976806641 49.44599914550781 135.1889953613281 49.05300140380859 133.9830017089844 49.05300140380859 C 132.2359924316406 49.05300140380859 130.9080047607422 50.58399963378906 130.9080047607422 52.40000152587891 L 130.9080047607422 52.42699813842773 C 130.9080047607422 54.37799835205078 132.1950073242188 55.81399917602539 134.1320037841797 55.81399917602539 C 135.0269927978516 55.81399917602539 135.8390045166016 55.52999877929688 136.4219970703125 55.09600067138672 L 136.4219970703125 53.32099914550781 L 133.9969940185547 53.32099914550781 L 133.9969940185547 51.87099838256836 L 138.0339965820312 51.87099838256836 L 138.0339965820312 55.85499954223633 C 137.1000061035156 56.65399932861328 135.7579956054688 57.33200073242188 134.0780029296875 57.33200073242188 C 131.1109924316406 57.33200073242188 129.1600036621094 55.21799850463867 129.1600036621094 52.45399856567383">
            </path>
        </svg>
        <svg class="Path_19" viewBox="140.879 47.685 7.858 9.484">
            <path id="Path_19" d="M 140.8789978027344 47.6851806640625 L 142.5459899902344 47.6851806640625 L 142.5459899902344 51.62823486328125 L 147.0709838867188 51.62823486328125 L 147.0709838867188 47.6851806640625 L 148.7369842529297 47.6851806640625 L 148.7369842529297 57.169189453125 L 147.0709838867188 57.169189453125 L 147.0709838867188 53.1722412109375 L 142.5459899902344 53.1722412109375 L 142.5459899902344 57.169189453125 L 140.8789978027344 57.169189453125 L 140.8789978027344 47.6851806640625 Z">
            </path>
        </svg>
        <svg class="Path_20" viewBox="151.176 47.685 7.696 9.485">
            <path id="Path_20" d="M 154.18359375 49.22967529296875 L 151.1755828857422 49.22967529296875 L 151.1755828857422 47.6846923828125 L 158.87158203125 47.6846923828125 L 158.87158203125 49.22967529296875 L 155.8635864257812 49.22967529296875 L 155.8635864257812 57.169677734375 L 154.18359375 57.169677734375 L 154.18359375 49.22967529296875 Z">
            </path>
        </svg>
        <svg class="Path_21" viewBox="160.47 47.549 7.343 9.756">
            <path id="Path_21" d="M 160.4700012207031 55.7869987487793 L 161.4730072021484 54.59500122070312 C 162.3800048828125 55.38100051879883 163.302001953125 55.82799911499023 164.4669952392578 55.82799911499023 C 165.4969940185547 55.82799911499023 166.1470031738281 55.34000015258789 166.1470031738281 54.6349983215332 L 166.1470031738281 54.60800170898438 C 166.1470031738281 53.93099975585938 165.7680053710938 53.56499862670898 164.0059967041016 53.15900039672852 C 161.9869995117188 52.67100143432617 160.8489990234375 52.07500076293945 160.8489990234375 50.32699966430664 L 160.8489990234375 50.29999923706055 C 160.8489990234375 48.67399978637695 162.2039947509766 47.54899978637695 164.0870056152344 47.54899978637695 C 165.468994140625 47.54899978637695 166.5670013427734 47.96900177001953 167.5290069580078 48.74200057983398 L 166.6349945068359 50.00199890136719 C 165.781005859375 49.3650016784668 164.927001953125 49.0260009765625 164.0599975585938 49.0260009765625 C 163.0850067138672 49.0260009765625 162.5160064697266 49.52799987792969 162.5160064697266 50.1510009765625 L 162.5160064697266 50.17800140380859 C 162.5160064697266 50.90999984741211 162.9490051269531 51.23500061035156 164.7779998779297 51.66799926757812 C 166.7839965820312 52.15599822998047 167.8130035400391 52.87400054931641 167.8130035400391 54.44599914550781 L 167.8130035400391 54.47299957275391 C 167.8130035400391 56.24800109863281 166.4179992675781 57.30500030517578 164.4259948730469 57.30500030517578 C 162.9770050048828 57.30500030517578 161.6080017089844 56.80300140380859 160.4700012207031 55.7869987487793">
            </path>
        </svg>
        <svg class="Path_22" viewBox="68.649 60.832 4.491 5.283">
            <path id="Path_22" d="M 68.64900207519531 60.83200073242188 L 71.00399780273438 60.83200073242188 C 71.66799926757812 60.83200073242188 72.18900299072266 61.02799987792969 72.52899932861328 61.36000061035156 C 72.80799865722656 61.64699935913086 72.96600341796875 62.04000091552734 72.96600341796875 62.5 L 72.96600341796875 62.51499938964844 C 72.96600341796875 63.38299942016602 72.44599914550781 63.90399932861328 71.71299743652344 64.11499786376953 L 73.13999938964844 66.11499786376953 L 72.03800201416016 66.11499786376953 L 70.73999786376953 64.27400207519531 L 69.57700347900391 64.27400207519531 L 69.57700347900391 66.11499786376953 L 68.64900207519531 66.11499786376953 L 68.64900207519531 60.83200073242188 Z M 70.93599700927734 63.45100021362305 C 71.59999847412109 63.45100021362305 72.02300262451172 63.10400009155273 72.02300262451172 62.56800079345703 L 72.02300262451172 62.55300140380859 C 72.02300262451172 61.98699951171875 71.61499786376953 61.67699813842773 70.92800140380859 61.67699813842773 L 69.57700347900391 61.67699813842773 L 69.57700347900391 63.45100021362305 L 70.93599700927734 63.45100021362305 Z">
            </path>
        </svg>
        <svg class="Path_23" viewBox="74.861 60.832 3.955 5.283">
            <path id="Path_23" d="M 74.86109924316406 60.8319091796875 L 78.77809906005859 60.8319091796875 L 78.77809906005859 61.66192626953125 L 75.78909301757812 61.66192626953125 L 75.78909301757812 63.03594970703125 L 78.43909454345703 63.03594970703125 L 78.43909454345703 63.865966796875 L 75.78909301757812 63.865966796875 L 75.78909301757812 65.284912109375 L 78.81609344482422 65.284912109375 L 78.81609344482422 66.11492919921875 L 74.86109924316406 66.11492919921875 L 74.86109924316406 60.8319091796875 Z">
            </path>
        </svg>
        <svg class="Path_24" viewBox="80.22 60.794 5.51 5.321">
            <path id="Path_24" d="M 82.54499816894531 60.79399871826172 L 83.40499877929688 60.79399871826172 L 85.73000335693359 66.11499786376953 L 84.74900054931641 66.11499786376953 L 84.21299743652344 64.83999633789062 L 81.71399688720703 64.83999633789062 L 81.17099761962891 66.11499786376953 L 80.22000122070312 66.11499786376953 L 82.54499816894531 60.79399871826172 Z M 83.87300109863281 64.01699829101562 L 82.95999908447266 61.90399932861328 L 82.05400085449219 64.01699829101562 L 83.87300109863281 64.01699829101562 Z">
            </path>
        </svg>
        <svg class="Path_25" viewBox="87.391 60.832 3.706 5.283">
            <path id="Path_25" d="M 87.39129638671875 60.8319091796875 L 88.31929016113281 60.8319091796875 L 88.31929016113281 65.26995849609375 L 91.0972900390625 65.26995849609375 L 91.0972900390625 66.11492919921875 L 87.39129638671875 66.11492919921875 L 87.39129638671875 60.8319091796875 Z">
            </path>
        </svg>
        <svg class="Path_26" viewBox="95.838 60.832 3.955 5.283">
            <path id="Path_26" d="M 95.83779907226562 60.8319091796875 L 99.75479888916016 60.8319091796875 L 99.75479888916016 61.66192626953125 L 96.76579284667969 61.66192626953125 L 96.76579284667969 63.03594970703125 L 99.41579437255859 63.03594970703125 L 99.41579437255859 63.865966796875 L 96.76579284667969 63.865966796875 L 96.76579284667969 65.284912109375 L 99.79279327392578 65.284912109375 L 99.79279327392578 66.11492919921875 L 95.83779907226562 66.11492919921875 L 95.83779907226562 60.8319091796875 Z">
            </path>
        </svg>
        <svg class="Path_27" viewBox="101.295 60.756 4.091 5.434">
            <path id="Path_27" d="M 101.2949981689453 65.34500122070312 L 101.8539962768555 64.68099975585938 C 102.359001159668 65.11900329589844 102.8730010986328 65.36799621582031 103.5220031738281 65.36799621582031 C 104.0950012207031 65.36799621582031 104.4570007324219 65.09600067138672 104.4570007324219 64.7030029296875 L 104.4570007324219 64.68800354003906 C 104.4570007324219 64.31099700927734 104.2460021972656 64.10700225830078 103.2649993896484 63.88100051879883 C 102.1399993896484 63.60900115966797 101.5059967041016 63.27700042724609 101.5059967041016 62.30300140380859 L 101.5059967041016 62.28799819946289 C 101.5059967041016 61.38299942016602 102.2610015869141 60.75600051879883 103.3099975585938 60.75600051879883 C 104.0800018310547 60.75600051879883 104.6910018920898 60.9900016784668 105.2269973754883 61.41999816894531 L 104.7289962768555 62.12200164794922 C 104.2539978027344 61.76699829101562 103.7779998779297 61.57899856567383 103.2949981689453 61.57899856567383 C 102.7519989013672 61.57899856567383 102.4349975585938 61.85800170898438 102.4349975585938 62.20500183105469 L 102.4349975585938 62.22000122070312 C 102.4349975585938 62.62799835205078 102.6760025024414 62.80899810791016 103.6949996948242 63.05099868774414 C 104.8119964599609 63.32199859619141 105.3860015869141 63.72200012207031 105.3860015869141 64.59799957275391 L 105.3860015869141 64.61299896240234 C 105.3860015869141 65.60199737548828 104.6080017089844 66.19000244140625 103.4990005493164 66.19000244140625 C 102.6910018920898 66.19000244140625 101.9290008544922 65.91100311279297 101.2949981689453 65.34500122070312">
            </path>
        </svg>
        <svg class="Path_28" viewBox="106.745 60.832 4.287 5.283">
            <path id="Path_28" d="M 108.4208984375 61.69232177734375 L 106.7448959350586 61.69232177734375 L 106.7448959350586 60.83233642578125 L 111.0318984985352 60.83233642578125 L 111.0318984985352 61.69232177734375 L 109.3568954467773 61.69232177734375 L 109.3568954467773 66.1153564453125 L 108.4208984375 66.1153564453125 L 108.4208984375 61.69232177734375 Z">
            </path>
        </svg>
        <svg class="Path_29" viewBox="111.637 60.794 5.51 5.321">
            <path id="Path_29" d="M 113.9619979858398 60.79399871826172 L 114.8219985961914 60.79399871826172 L 117.1470031738281 66.11499786376953 L 116.1660003662109 66.11499786376953 L 115.629997253418 64.83999633789062 L 113.1309967041016 64.83999633789062 L 112.5879974365234 66.11499786376953 L 111.6370010375977 66.11499786376953 L 113.9619979858398 60.79399871826172 Z M 115.2900009155273 64.01699829101562 L 114.3769989013672 61.90399932861328 L 113.4710006713867 64.01699829101562 L 115.2900009155273 64.01699829101562 Z">
            </path>
        </svg>
        <svg class="Path_30" viewBox="117.75 60.832 4.287 5.283">
            <path id="Path_30" d="M 119.4263000488281 61.69232177734375 L 117.7502975463867 61.69232177734375 L 117.7502975463867 60.83233642578125 L 122.0373001098633 60.83233642578125 L 122.0373001098633 61.69232177734375 L 120.3622970581055 61.69232177734375 L 120.3622970581055 66.1153564453125 L 119.4263000488281 66.1153564453125 L 119.4263000488281 61.69232177734375 Z">
            </path>
        </svg>
        <svg class="Path_31" viewBox="123.774 60.832 3.955 5.283">
            <path id="Path_31" d="M 123.7743988037109 60.8319091796875 L 127.6913986206055 60.8319091796875 L 127.6913986206055 61.66192626953125 L 124.702392578125 61.66192626953125 L 124.702392578125 63.03594970703125 L 127.3523941040039 63.03594970703125 L 127.3523941040039 63.865966796875 L 124.702392578125 63.865966796875 L 124.702392578125 65.284912109375 L 127.7293930053711 65.284912109375 L 127.7293930053711 66.11492919921875 L 123.7743988037109 66.11492919921875 L 123.7743988037109 60.8319091796875 Z">
            </path>
        </svg>
        <svg class="Path_32" viewBox="132.606 60.832 3.706 5.283">
            <path id="Path_32" d="M 132.6058959960938 60.8319091796875 L 133.5338897705078 60.8319091796875 L 133.5338897705078 65.26995849609375 L 136.3118896484375 65.26995849609375 L 136.3118896484375 66.11492919921875 L 132.6058959960938 66.11492919921875 L 132.6058959960938 60.8319091796875 Z">
            </path>
        </svg>
        <svg class="Rectangle_16">
            <rect id="Rectangle_16" rx="0" ry="0" x="0" y="0" width="0.928" height="5.283">
            </rect>
        </svg>
        <svg class="Path_33" viewBox="141.181 60.832 5.193 5.283">
            <path id="Path_33" d="M 141.1806945800781 60.8319091796875 L 142.1696929931641 60.8319091796875 L 143.7766876220703 63.3299560546875 L 145.3846893310547 60.8319091796875 L 146.3736877441406 60.8319091796875 L 146.3736877441406 66.11492919921875 L 145.4446868896484 66.11492919921875 L 145.4446868896484 62.325927734375 L 143.7766876220703 64.81695556640625 L 143.7466888427734 64.81695556640625 L 142.0936889648438 62.3409423828125 L 142.0936889648438 66.11492919921875 L 141.1806945800781 66.11492919921875 L 141.1806945800781 60.8319091796875 Z">
            </path>
        </svg>
        <svg class="Rectangle_17">
            <rect id="Rectangle_17" rx="0" ry="0" x="0" y="0" width="0.928" height="5.283">
            </rect>
        </svg>
        <svg class="Path_34" viewBox="151.258 60.832 4.286 5.283">
            <path id="Path_34" d="M 152.9333038330078 61.69232177734375 L 151.25830078125 61.69232177734375 L 151.25830078125 60.83233642578125 L 155.5442962646484 60.83233642578125 L 155.5442962646484 61.69232177734375 L 153.8692932128906 61.69232177734375 L 153.8692932128906 66.1153564453125 L 152.9333038330078 66.1153564453125 L 152.9333038330078 61.69232177734375 Z">
            </path>
        </svg>
        <svg class="Path_35" viewBox="157.281 60.832 3.955 5.283">
            <path id="Path_35" d="M 157.2812957763672 60.8319091796875 L 161.1982879638672 60.8319091796875 L 161.1982879638672 61.66192626953125 L 158.2092895507812 61.66192626953125 L 158.2092895507812 63.03594970703125 L 160.8592834472656 63.03594970703125 L 160.8592834472656 63.865966796875 L 158.2092895507812 63.865966796875 L 158.2092895507812 65.284912109375 L 161.2362823486328 65.284912109375 L 161.2362823486328 66.11492919921875 L 157.2812957763672 66.11492919921875 L 157.2812957763672 60.8319091796875 Z">
            </path>
        </svg>
        <svg class="Path_36" viewBox="163.094 60.832 4.777 5.283">
            <path id="Path_36" d="M 163.093994140625 60.83200073242188 L 165.0630035400391 60.83200073242188 C 166.7239990234375 60.83200073242188 167.8710021972656 61.97100067138672 167.8710021972656 63.45800018310547 L 167.8710021972656 63.47299957275391 C 167.8710021972656 64.95999908447266 166.7239990234375 66.11499786376953 165.0630035400391 66.11499786376953 L 163.093994140625 66.11499786376953 L 163.093994140625 60.83200073242188 Z M 164.0220031738281 61.67699813842773 L 164.0220031738281 65.26999664306641 L 165.0630035400391 65.26999664306641 C 166.1730041503906 65.26999664306641 166.8979949951172 64.52200317382812 166.8979949951172 63.48799896240234 L 166.8979949951172 63.47299957275391 C 166.8979949951172 62.43899917602539 166.1730041503906 61.67699813842773 165.0630035400391 61.67699813842773 L 164.0220031738281 61.67699813842773 Z">
            </path>
        </svg>
    </div>
    <div id="Total">
        <svg class="Rectangle_5">
            <rect id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="203.103" height="27.625">
            </rect>
        </svg>
        <div id="Total_df">
            <span>Total:</span>
        </div>
        <div id="n_332342343">
            <span style="color: #0f0f0f">{{$invoice->amount}} BDT</span>
        </div>
    </div>
    <svg class="Footer">
        <rect id="Footer" rx="0" ry="0" x="0" y="0" width="592" height="44">
        </rect>
    </svg>
</div>
<div class="d-print-none m-5 p-5">
    <div class="float-right">
        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
        <a href="{{route('home')}}" class="btn btn-primary w-md waves-effect waves-light"><i class="fa fa-home"></i></a>
        <a href="{{route('invoice.index')}}" class="btn btn-primary w-md waves-effect waves-light">Invoices</a>
    </div>
</div>
<script src="{{asset('libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
