@extends("layouts.home")
@section("content")

    <div class = "row-cols-md-6">
        {!! $setting->contact !!}
        <BR><BR>
    </div>

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
    </div>
<br><br>

    <div class="col-md-7"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d870.7072113772451!2d34.630184159500764!3d36.824069418901374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1683228600622!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>


    <div class="ana-kutu">
        <div class="col-md-7">
            <div id="harita" style="width:100%;height:500px;"></div>
        </div>
        <div class="col-md-5">
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{$setting->address}}</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>{{$setting->email}}</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>{{$setting->phone}}</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i><strong>Faks: </strong>{{$setting->fax}}</p>
        </div>
    </div>

    <style>
        .ana-kutu {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;


        }
        .harita-kutusu {
            width: 60%;
            padding-left: 50px;

        }
        .bilgi-kutusu {
            width: 40%;
            padding-left: 20px;

        #harita {
            width: 100%;
            height: 400px;
            text-align: left;
        }
        }
    </style>



@endsection
