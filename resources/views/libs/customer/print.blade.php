@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
{{--    <div class="card">--}}
{{--        <div class="card-body text-center">--}}
{{--            <span class="text-center"><h2><u>Application Form For Apartment</u></h2></span>--}}
{{--            <div class="mx-5 mt-4">--}}
{{--                <ol class="font-size-17">--}}
{{--                    <li><span>Full Name: <u>{{$customer->full_name}}</u></span></li>--}}
{{--                    <li><span>Full Name: <u>{{$customer->full_name}}</u></span></li>--}}
{{--                    <li><span>Full Name: <u>{{$customer->full_name}}</u></span></li>--}}
{{--                </ol>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<h1 style="text-align: center;"><u>Application Form For Apartment</u></h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
<ul style="font-size: x-large; text-align: justify-all">
    <li style="text-align: left;">
        <p><strong>FULL NAME (In block letter)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</strong>     <u>{{strtoupper($customer->full_name)}}</u></p>
    </li>
    <li style="text-align: left;">
        <p><strong>FATHER&rsquo;S/ HUSBAND&rsquo;S NAME&nbsp; &nbsp; &nbsp; &nbsp;-</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>MOTHER&rsquo;S NAME&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>OCCUPATION OF THE APPLICANT -</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>DATE OF BIRTH/AGE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>NATIONALITY&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>TELEPHONE NO.( If any )&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>NOMINEE (With relationship)&nbsp; &nbsp; &nbsp; &nbsp;-</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>PARMANENT ADDRESS&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>PRESENT ADDRESS&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>REFERENCE PERSON&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>DETAILS OF PROJECT&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;&nbsp;</strong></p>
        <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Car parking no-</strong></li>
</ul>
<p><strong>&nbsp;</strong></p>
<ul style="text-align: justify; font-size: x-large">
    <li style="text-align: left;">
        <p><strong>DO YOU WANT TO AVAILLOAN : Yes / No</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>YOU WANT TO SETTLE THE PAYMENT -</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>AMOUNT YOU HAVE PAID WITH -</strong></p>
    </li>
    <li style="text-align: left;">
        <p><strong>PARTICULARS&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</strong></p>
    </li>
</ul>
<h4 style="text-align: justify;">&nbsp;</h4>
<h2 style="text-align: center;"><strong><u>Declaration</u></strong></h2>
<p>&nbsp;</p>
<p style="text-align: justify;">I do hereby declare that the information and particulars furnished by me herein before are true to the best of my knowledge and belief and that I have not concealed or misrepresented anything. I, further declare that I have gone through the prospectus of the Company's Apartment Building construction scheme and have seen the relevant Plans and Specifications and have understood the terms &amp; conditions of the payment schedule and the allotment of Flat and its ultimate transfer to the allottee after its completion and full payment of the <strong>cost. </strong>I accept and obey the Company's absolute right either to accept or reject my application for allotment of Flat. I know that in case flat is not allotted to me, I shall be entail to receive refund of the payment I made earlier. If flat is allotted to me, I shall execute at my own cost such Agreements, Deeds &amp; Power of Attorney etc. as may be necessary in connection therewith and I shall pay the Stamp Duties, Registration Cost and other fees and charges livable by the Government, Local Bodies etc. I agree to accept an undemarcated and undivided share of the land on which construction of residential buildings will be undertaken and to pay the price thereof. I agree to be a member of the Apartment Owners' Co-operative Society and shall abide by the rules and regulations framed by the society.</p>
<p style="text-align: justify;">If the installment is not paid in schedule time as mentioned installment schedule form then installment/at a time along with 3% interest per month will be recovered. Further more in case of failure of payments of 3(three) consecutive installments the company reserves the right to review the rate or cancel the allotment without further referring to you. Tk. 100,000/- (Taka One Lac) only will be deducted if surrendered/cancelled. <strong><u>All dues must be paid </u></strong><strong><u>before 01(one) month of handover. </u></strong></p>
<p style="text-align: justify;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="text-decoration: underline;"> SIGNATURE OF THE APPLICANT </span></strong></p>
<p style="text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Date :</p>
<p style="text-align: justify;"><strong>&nbsp; &nbsp; &nbsp; &nbsp;<u>For official use only </u></strong>Installment/At a time</p>
<ul style="text-align: justify;">
    <li>
        <p><strong>FLAT :Tk.</strong></p>
    </li>
    <li>
        <p><strong>UTILITY :Tk.</strong></p>
    </li>
    <li>
        <p><strong>CAR PARKING :Tk.</strong></p>
    </li>
    <li>
        <p><strong>TOTAL :Tk.</strong></p>
    </li>
    <li>
        <p><strong>RECEIVED (Initial) &nbsp;: Tk.</strong></p>
    </li>
    <li>
        <p><strong>BALANCE :Tk</strong></p>
    </li>
</ul>
<p>&nbsp;</p>
<h3>&nbsp;</h3>
<h3 style="text-align: center;"><strong><span style="text-decoration: underline;">ALLOTTEE&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="text-decoration: underline;">CHAIRMAN &nbsp;</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-decoration: underline;">MANAGING DIRECTOR</span></strong></h3>
<p style="text-align: center;"><span style="text-decoration: underline;"><strong>.</strong></span></p>



<br><br><br><br>
<div class="d-print-none">
    <div class="float-right">
        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
        {{--            <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>--}}
    </div>
</div>
@endsection
