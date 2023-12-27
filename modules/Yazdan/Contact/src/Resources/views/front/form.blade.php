<div class="contact-message">
    <h2>پروژه خود را به ما بگویید</h2>
    <form action="{{route('contact.store')}}" method="post" class="contact-form">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <x-input-home name="name" label="نام" type="text" required/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <x-input-home name="mobile" label="تلفن" type="text" required/>
            </div>
            <div class="col-12">
                <x-input-home name="email" label="ایمیل" type="email" required/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
            </div>
            <div class="col-12">
                <x-textarea-home label="پیام" name="message"/>
                <div class="contact-btn">
                    <button class="btn btn-outline" type="submit">پیام ارسال</button>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <p class="form-messege"></p>
            </div>
        </div>
    </form>
</div>
