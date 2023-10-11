<section class="tag">
    <div class="text-white py-20"
  style="background-color: #198450;">
        <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-24">
            <div class="flex flex-col w-full lg:w-1/3 p-8">
                <p class="ml-6 text-yellow-300 text-lg uppercase tracking-loose">REVIEW</p>
                <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">Leave us a feedback!</p>
                <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                    Please provide your valuable feedback and something something ...<br>
      

                </p>

        
            </div>
            <div class="flex flex-col w-full lg:w-2/3 justify-center">
                <div class="container w-full px-4">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-6/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                                <div class="flex-auto p-5 lg:p-10">
                                    <h4 class="text-2xl mb-4 text-black font-semibold">Have a suggestion?</h4>
                                    <form id="feedbackForm" action="{{url('payfeedback')}}" method="post">
                          @csrf
                  
                                    







                    <div class="relative w-full mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="email">Email</label><input type="email" name="email" id="email" class="border-0 px-3 py-3 rounded text-sm shadow w-full
                    bg-gray-300 placeholder-black text-gray-800 outline-none focus:bg-gray-400" placeholder=" "
                        style="transition: all 0.15s ease 0s;" required />
                    </div>






                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="message">Message</label><textarea maxlength="300" name="feedback" id="feedback" rows="4"
                        cols="80"
                        class="border-0 px-3 py-3 bg-gray-300 placeholder-black text-gray-800 rounded text-sm shadow focus:outline-none w-full"
                        placeholder="" required></textarea><br>
                        
                                            </div>
                      <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="message">Rating</label>
                      <div x-data="
    {
        rating: 0,
        hoverRating: 0,
        ratings: [{'amount': 1, 'label':'Terrible'}, {'amount': 2, 'label':'Bad'}, {'amount': 3, 'label':'Okay'}, {'amount': 4, 'label':'Good'}, {'amount': 5, 'label':'Great'}],
        rate(amount) {
            if (this.rating == amount) {
        this.rating = 0;
      }
            else this.rating = amount;
        },
    currentLabel() {
       let r = this.rating;
      if (this.hoverRating != this.rating) r = this.hoverRating;
      let i = this.ratings.findIndex(e => e.amount == r);
      if (i >=0) {return this.ratings[i].label;} else {return ''};     
    }
    }
    " class="space-y-2 rounded m-2  p-3  mx-auto"
  style="height: 23px;">
  <div class="flex space-x-0">
    <template x-for="(star, index) in ratings" :key="index">
        <button @click="rate(star.amount)" @mouseover="hoverRating = star.amount" @mouseleave="hoverRating = rating"
            aria-hidden="true"
      :title="star.label"
            class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"
            :class="{'text-gray-600': hoverRating >= star.amount, 'text-yellow-400': rating >= star.amount && hoverRating >= star.amount}">
            <svg class="w-15 transition duration-150" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="">
        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
      </svg>
        </button>

    </template>
  </div>
    <div class="p-2">
    <template x-if="rating || hoverRating">
          <p x-text="currentLabel()"></p>
    </template>
   
    </div>

</div>
                </p>

        
            </div>
                                            <div class="text-center mt-6">
                                                <button id="feedbackBtn"
                        class="bg-yellow-300 text-black text-center mx-auto active:bg-yellow-400 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                        type="submit" style="transition: all 0.15s ease 0s;">Submit
                      </button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</section>