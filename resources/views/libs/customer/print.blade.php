@extends('layouts.page')
@section('page-title')
    @include('components.page-title')
@endsection
@section('content')
    <div class="text-center m-5 p-3"><p class="text-dark-gray text-wrap font-size-24 font-weight-bold"><u>Application Form For Apartment</u></p></div>
    <div class="table-responsive font-size-15 p-3">
        <table class="w-75">
            <tbody class="table table-striped">
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">FULL NAME</th>
                    <td>{{isset($customer) ? strtoupper($customer->full_name) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">FATHER&rsquo;S/ HUSBAND&rsquo;S NAME</th>
                    <td>{{isset($customer) ? strtoupper($customer->father_or_husband_name) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row"  colspan="6">MOTHER&rsquo;S NAME</th>
                    <td>{{isset($customer) ? strtoupper($customer->mother_name) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">OCCUPATION OF THE APPLICANT</th>
                    <td>{{isset($customer) ? strtoupper($customer->occupation) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">DATE OF BIRTH</th>
                    <td>{{isset($customer) ? strtoupper($customer->date_of_birth) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row"  colspan="6">NATIONALITY</th>
                    <td>{{isset($customer) ? strtoupper($customer->nationality) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row"  colspan="6">TELEPHONE NO.</th>
                    <td>{{isset($customer) ? strtoupper($customer->phone_number) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">NOMINEE (With relationship)</th>
                    <td>{{isset($customer) ? strtoupper($customer->nominee_name) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">PERMANENT ADDRESS</th>
                    <td>{{isset($customer) ? strtoupper($customer->permanent_address) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">PRESENT ADDRESS</th>
                    <td>{{isset($customer) ? strtoupper($customer->present_address) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">DETAILS OF PROJECT</th>
                    <td>{{isset($customer) ? strtoupper($customer->flats->project->name).', '.strtoupper($customer->flats->project->address) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">CAR PARKING NO.</th>
                    <td>{{isset($customer) ? strtoupper($customer->flats->car_parking_no) : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">AVAIL LOAN</th>
                    <td>{{isset($customer) ? ($customer->is_avail_loan ? 'YES' : 'NO') : ''}}</td>
                </tr>
                <tr class="col-sm-12">
                    <th scope="row" colspan="6">INSTALLMENT</th>
                    <td>{{isset($customer) ? ($customer->is_installable ? 'YES' : 'NO') : ''}}</td>
                </tr>
                <tr class="col-sm-12 border-bottom">
                    <th scope="row" colspan="6">PAID AMOUNT</th>
                    <td>{{isset($customer) ? strtoupper($customer->total()) : ''}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row m-3 break">
        <div class="col-12">
            <h5><u>PARTICULARS</u></h5><br>
        </div>

        <br><p class="font-size-15 p-2"><u>{{strtoupper($customer->flats->particulars)}}</u></p>
    </div>
    @push('css')
        <style>
            @media print {
                .break {
                    page-break-after: always;
                }
            }
        </style>
    @endpush
    <br><br>
    <div class="row p-3">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <h3><u>Declaration</u></h3>
            </div><br>
            <div class="row mb-5 font-size-17">
                <p style="text-align: justify;">I do hereby declare that the information and particulars furnished by me herein before are true to the best of my knowledge and belief and that I have not concealed or misrepresented anything. I, further declare that I have gone through the prospectus of the Company's Apartment Building construction scheme and have seen the relevant Plans and Specifications and have understood the terms &amp; conditions of the payment schedule and the allotment of Flat and its ultimate transfer to the allottee after its completion and full payment of the <strong>cost. </strong>I accept and obey the Company's absolute right either to accept or reject my application for allotment of Flat. I know that in case flat is not allotted to me, I shall be entail to receive refund of the payment I made earlier. If flat is allotted to me, I shall execute at my own cost such Agreements, Deeds &amp; Power of Attorney etc. as may be necessary in connection therewith and I shall pay the Stamp Duties, Registration Cost and other fees and charges livable by the Government, Local Bodies etc. I agree to accept an undemarcated and undivided share of the land on which construction of residential buildings will be undertaken and to pay the price thereof. I agree to be a member of the Apartment Owners' Co-operative Society and shall abide by the rules and regulations framed by the society.</p>
                <p style="text-align: justify;">If the installment is not paid in schedule time as mentioned installment schedule form then installment/at a time along with 3% interest per month will be recovered. Further more in case of failure of payments of 3(three) consecutive installments the company reserves the right to review the rate or cancel the allotment without further referring to you. Tk. 100,000/- (Taka One Lac) only will be deducted if surrendered/cancelled. <strong><u>All dues must be paid </u></strong><strong><u>before 01(one) month of handover. </u></strong></p>
            </div><br><br><br><br>
            <div class="row">
                <div class="col-md-8">

                </div>
                <div class="col-md-4 mr-0">
                    <h5><u>SIGNATURE OF THE APPLICANT</u></h5>
                    <h5>DATE:</h5>
                </div>
            </div><hr><br><br>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center mb-5">FOR OFFICIAL USE</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr class="col-sm-12">
                                <th scope="row">PAYMENT SETTLEMENT TYPE</th>
                                <td>{{isset($customer) ? ($customer->is_installable ? 'INSTALLMENT' : 'AT A TIME'): ''}}</td>
                            </tr>
                            <tr class="col-sm-12">
                                <th scope="row">TOTAL PAYABLE AMOUNT</th>
                                <td>{{isset($customer) ? $customer->flats->flat_amount.' TK': ''}}</td>
                            </tr>
                            <tr class="col-sm-12">
                                <th scope="row">BOOKING AMOUNT</th>
                                <td>{{isset($customer) ? $customer->flats->flat_booking.' TK': ''}}</td>
                            </tr>
                            <tr class="col-sm-12">
                                <th scope="row">DOWN PAYMENT</th>
                                <td>{{isset($customer) ? $customer->flats->flat_downpayment.' TK': ''}}</td>
                            </tr>
                            <tr class="col-sm-12">
                                <th scope="row">DUE</th>
                                <td>{{isset($customer) ? $customer->flats->flat_amount-$customer->total().' TK': ''}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div><br><br><br><br><br><br><br><br>
            <div class="row mt-5 text-center">
                <div class="col-md-4">
                    <h4><u>ALOTTE</u></h4>
                </div>
                <div class="col-md-4">
                    <h4><u>CHAIRMAN</u></h4>
                </div>
                <div class="col-md-4">
                    <h4><u>MANAGING DIRECTOR</u></h4>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>
    <div class="d-print-none">
        <div class="float-right">
            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
            {{--            <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>--}}
        </div>
    </div>
@endsection
