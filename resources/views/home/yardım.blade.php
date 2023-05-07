@extends("layouts.home")
@section('title','SSS')
@section('keywords','prefabrik ev','hangar','2 katlı prefabrik ev')

@section('content')

    <div class = "row-cols-md-12">
         <h5>İletişim bilgilerinizi girin teknik destek ekibimiz ile hemen iletişime geçelim.</h5><br>
        <div class="col-md-8" >

            <h5 class="font-weight-bold text-dark mb-4">İletişim Bilgileri</h5>
            <form action="{{route('sendmessage')}}" class="clearfix" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control border-0 py-4" name="name" placeholder="Adınız Soyadınız" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 py-4" name="phone" placeholder="Telefon Numarası" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 py-4" name="email" placeholder="Email" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-0 py-4" name="subject" placeholder="Konu" required="required" />
                </div>
                <div class="form-group">
                    <textarea class="input" name="message" rows="5" cols="70" placeholder="Mesajınız" required="required"></textarea>
                </div>

                <div>
                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Gönder</button>
                </div>
            </form>
        </div>
    </div>
@endsection

