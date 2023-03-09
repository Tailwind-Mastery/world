<script>
import Trees from '../Images/Home/trees-landing.jpg'
import Clouds from '../Images/Home/clouds-landing.jpg'
import Mountains from '../Images/Home/mountains-landing.jpg'

export default {
    data() {
        return {
            images: [
                Trees,
                Clouds,
                Mountains
            ],
            loadedImage: 0
        }
    },
    methods: {
        changeImage(){

            setInterval(() => {
                this.loadedImage = Math.floor(Math.random()*this.images.length)
            }, 5000);
        },
        moveImage(status){
            if(status == 'right') {
                this.loadedImage = this.loadedImage + 1
            } else if (status == 'left') {
                this.loadedImage = this.loadedImage - 1
            }
            if(this.images[this.loadedImage] == undefined) {
                this.loadedImage = 0
            }
        },
    },
    mounted() {
        this.changeImage()
    },
    computed: {
        imageStatus() {
            return `${this.loadedImage+1} out of ${this.images.length}`
        }
    }
}
</script>

<template>
    <div class="flex flex-col">

        <img :src="images[loadedImage]" class="w-full object-cover h-96 md:h-[35rem] lg:h-[45rem] xl:h-[55rem]">

        <div class="flex items-center justify-between px-5 md:px-10 py-2 border">

            <div class="flex items-center gap-1 cursor-pointer" @click="$event => moveImage('left')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-black">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" />
                </svg>
                <p class="italic text-sm font-serif hidden md:block">
                    move back
                </p>
            </div>

            <div class="flex gap-1 text-sm italic font-serif lining-nums">
                {{ imageStatus }}
            </div>
            
            <div class="flex items-center gap-1 cursor-pointer" @click="$event => moveImage('right')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 fill-black">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" />
                </svg>
                <p class="italic text-sm font-serif hidden md:block">
                    move forward
                </p>
            </div>            
       
        </div>

    </div>
</template>