@extends('master')
@section('content')
    <section class="pt-50">
        <div class="container">
            <section class="latest-podcast-section section-padding pb-0" id="section_2">
                <div class="container">
                    <div class="row justify-content-center g-3 data">

                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">Lastest Gadgets</h4>
                            </div>
                        </div>
                     
                            <div class="row g-0 mx-2 justify-content-center">
                                <div class="col-md-2">
                                    <label for="id_label_multiple">
                                     Gender:                                     
                                        <select class="sort js-states form-control sortgender p-5" style="width:100%;">
                                           @if (!empty($genders))   
                                           @foreach ($genders as $item)
                                           <option value="{{$item->id}}">{{$item->title}}</option>                                               
                                           @endforeach                                            
                                           @endif                                           
                                        </select>
                                      </label>
                                </div>
                                <div class="col-md-2">
                                    <label for="id_label_multiple">
                                     Type:                                     
                                        <select class="sort js-states form-control sorttype" style="width:100%;">
                                            @if (!empty($types))   
                                            @foreach ($types as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>                                               
                                            @endforeach                                            
                                            @endif
                                        </select>
                                      </label>
                                </div>
                                <div class="col-md-3 mx-auto my-3 ">
                                    <div class="input-group form-control shadow-none"> <input type="search" name="cardNumber"
                                            placeholder="Search for TCS - graded cards" class="form-control border-0 shadow-none productSearch" required>
                                        <div class="input-group-append ">
                                            <button class="input-group-text bg-white border-0 productSearch-btn"><i
                                                    class="fa-solid fa-magnifying-glass "></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      

                        @if (session()->has('cart'))
                        <div class="alert alert-success m-2 p-2 text-center ">
                            {{ session()->get('cart') }}
                        </div>
                     @endif
                     <div class="row datas">                    
                      
                    </div>

                    </div>
                </div>

            </section>
        </div>

    </section>
    <script src="{{URL::to('public/assets/js/jquery.min.js')}}"></script>

<script>
   var datas = <?php echo json_encode($title); ?>;
        $(document).ready(function() {
            $(".sort").select2({
                // width: 'auto'
            });

            $(".productSearch").autocomplete({
                source: datas
            });
    });
</script>

@endsection
