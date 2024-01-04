   <form wire:submit='createQuote' class="box-form-contact-leading">
       <div class="row">
           <div class="col-lg-8">
               <div wire:loading>Sening...</div>
               <h2 class="title-favicon color-brand-2 mb-15">Calculate Shipping</h2>
               <p class="font-md color-grey-700 mb-25">Please Fill All Inquiry To Get Your Quote.</p>
               <div class="row align-items-center">
                   <div class="col-lg-6">
                       <div class="form-group">
                           <label for="name" class="form-label color-grey-700">Name</label>
                           <input wire:model="name" id="name" class="form-control" type="text"
                               placeholder="(required)">
                           @error('name')
                               <span class="invalid-error">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="form-group">
                           <label for="email" class="form-label color-grey-700">Email</label>
                           <input id="email" wire:model='email' class="form-control" type="text"
                               placeholder="(required)">
                           @error('email')
                               <span class="invalid-error">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="form-group">
                           <label for="phone" class="form-label color-grey-700">Phone</label>
                           <input id="phone" wire:model='phone' class="form-control" type="text"
                               placeholder="(required)">
                           @error('phone')
                               <span class="invalid-error">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="form-group">
                           <label for="company" class="form-label color-grey-700">Company</label>
                           <input id="company" wire:model='company' class="form-control" type="text"
                               placeholder="(optional)">
                           @error('company')
                               <span class="invalid-error">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="form-group">
                           <label for="solution" class="form-label color-grey-700">Select consignment solution</label>
                           <select wire:model='solution' id="solution" class="form-control">
                               <option value="">{{ __('Consignment Solution') }}</option>
                               @foreach ($solutions as $solution_)
                                   <option value="{{ $solution_['value'] }}">{{ $solution_['title'] }}</option>
                               @endforeach
                           </select>
                           @error('solution')
                               <span class="invalid-error">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="form-group">
                           <label for="message_" class="form-label color-grey-700">Message / Note</label>
                           <textarea wire:model="message_" class="form-control" id="message_" rows="5" placeholder="Enter a message"></textarea>
                           @error('message_')
                               <span class="invalid-error">{{ $message }}</span>
                           @enderror
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-4">
               <div class="box-image-contact"><img
                       src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/img-contact.png"
                       alt="{{ config('app.name') }}"></div>
           </div>
       </div>
       <div class="col-lg-12">
           <button type="submit" class="btn btn-brand-1-big mr-25">
               <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                   <path stroke-linecap="round" stroke-linejoin="round"
                       d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z">
                   </path>
               </svg>Cost Quote</button>
           <a class="btn btn-link-medium" href="{{ route('contact-us') }}">Contact
               Us
               <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                   </path>
               </svg></a>
       </div>
   </form>
