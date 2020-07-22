
	                    @if(session('error'))
                          <div class="alert alert-danger">
                            {{ session('error') }}
                          </div>   
                        @endif
                        @if(count($errors->all()) > 0 )
                          <div class="alert alert-danger">
                        @foreach($errors->all() as $er)
                        
                           <p>{{ $er }}</p> 
                       
                        @endforeach
                         </div> 
                         @endif