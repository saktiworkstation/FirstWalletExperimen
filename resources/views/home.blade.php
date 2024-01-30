@extends('layouts.main')

@section('container')
    <div class="container py-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">First Wallet Experiment</h1>
                <p class="col-md-8 fs-4">This project aims to create a digital wallet platform that facilitates users in
                    conducting online financial transactions. The platform will provide features such as digital money
                    storage, money transfer, bill payments, and transaction history tracking.</p>
                <button class="btn btn-primary btn-lg" type="button">Make Your Wallet Now!</button>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5" id="Features">
        <h2 class="pb-2 border-bottom">Main Feature</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-start">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">User Dashboard</h3>
                    <p>- Summary of balance and transaction history.</p>
                    <p>- Visual graphs to track expenditures and income.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Top Up and Withdrawal</h3>
                    <p>- Integration with various payment methods.
                    </p>
                    <p>- Withdrawal process to the associated bank account.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Money Transfer</h3>
                    <p>- Quick money transfers between platform users.</p>
                    <p>- Option to transfer to a phone number or email.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Bill Payments</h3>
                    <p>- Providing services for routine bill payments such as electricity, water, and internet.</p>
                    <p>- Bill payment reminders.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Security Features</h3>
                    <p>- End-to-end encryption to protect user information.</p>
                    <p>- Two-factor authentication options for account access.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Help Center and Support</h3>
                    <p>- An online help center with FAQs.</p>
                    <p>- Customer support through live chat or support tickets.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Promotions and Discounts</h3>
                    <p>- Special offers for users actively using the platform.</p>
                    <p>- Point system or cashback to encourage platform usage.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Reports and Analysis</h3>
                    <p>- Monthly reports on account activity and expenditure trends.</p>
                    <p>- Category expenditure analysis to assist users in managing their finances.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-xxl-8 px-3 py-3" id="About">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/wallet-team.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">About this Proyek</h1>
                <p class="lead">The Digital Wallet Experiment is an exploratory effort to create a secure, convenient, and
                    user-friendly digital wallet solution. This project marks my first step into the world of developing
                    online financial applications.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Go to Repository Git</button>
                </div>
            </div>
        </div>
    </div>
@endsection
