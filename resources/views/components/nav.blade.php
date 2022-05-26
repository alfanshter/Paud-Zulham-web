
<div class="container-fluid position-relative hero p-0">
    <img class="img-fluid" src="{{ asset('storage/images/banner.jpg') }}" alt="" />
    <div class="position-absolute px-3 py-3 navbar">
        
        <h1><a href="/" class="text-decoration-none text-dark">BERANDA</a></h1>
        
        @if (auth()->user()!=null &&  auth()->user()->role == 0)
        <h1><a href="/fasilitas_admin" class="text-decoration-none text-dark">FASILITAS</a></h1>
        @else
    
        <h1><a href="/fasilitas" class="text-decoration-none text-dark">FASILITAS</a></h1>
        @endif
        {{--//Struktur Organisasi--}}
        
        @if (auth()->user()!=null &&  auth()->user()->role == 0)
        <h1><a href="/struktur_admin" class="text-decoration-none text-dark">STRUKTUR ORGANISASI</a></h1>
        @else
        <h1><a href="/struktur" class="text-decoration-none text-dark">STRUKTUR ORGANISASI</a></h1>
        @endif

        {{--Kegiatan--}}
        @if (auth()->user()!=null &&  auth()->user()->role == 0)
        <h1><a href="/kegiatan_admin" class="text-decoration-none text-dark">KEGIATAN</a></h1>
        @else
        <h1><a href="/kegiatan" class="text-decoration-none text-dark">KEGIATAN</a></h1>
        @endif

        {{--INFO--}}
         @if (auth()->user()!=null &&  auth()->user()->role == 0)
         <h1><a href="/info_admin" class="text-decoration-none text-dark">INFO PAUD</a></h1>
      
        @else
        <h1><a href="/info" class="text-decoration-none text-dark">INFO PAUD</a></h1>
      
        @endif
       
       {{--Visimisi--}}
        @if (auth()->user()!=null &&  auth()->user()->role == 0)
        <h1><a href="/visimisi-edit" class="text-decoration-none text-dark">VISI & MISI</a></h1>            
      
        @else
        <h1><a href="/visimisi" class="text-decoration-none text-dark">VISI & MISI</a></h1>            
    
        @endif

    </div>
</div>