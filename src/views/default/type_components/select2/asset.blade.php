@push('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endpush
@push('bottom')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
      setTimeout(()=>{
          $('.select2-selection__rendered').css('padding-top','5px')
      },300)
    </script>
@endpush
