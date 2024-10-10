<template>
  <div class="content">
    <div class="hgroup">
      <p class="date">{{ currentDate }}</p>
      <div class="d-flex">
        <h4>
          Creative curves & disruptive Valley at ramps ecosystem infrastructure
          backing seed round bandwidth series
        </h4>
        <div class="share-box"></div>
      </div>
      <hr />
    </div>
    <!--hgroup-->

    <article class="article">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec turpis
        pellentesque penatibus eu. Urna, ac arcu euismod purus convallis. Hac
        nunc, aliquam lorem mauris laoreet aliquam urna, nisl adipiscing.
        Egestas eu pellentesque ut faucibus turpis sed aliquam risus, pulvinar.
        Lacus, ut ultricies amet vel pellentesque. In suspendisse aliquam
        tempus, cras.
      </p>

      <p>
        Nam donec sit phasellus habitant. Nibh etiam volutpat dictumst ut mattis
        neque posuere mauris bibendum. Odio ullamcorper nec vestibulum odio
        turpis mi, aliquam duis. Consectetur amet pulvinar nibh urna. Quis in
        eget nunc proin lorem ac pellentesque. Vulputate feugiat sed euismod sit
        tincidunt diam donec nec. Mattis non, nisi, rhoncus imperdiet velit sit
        odio feugiat arcu. Egestas sed quis vehicula amet. Nunc at quis lacus,
        vitae, cursus netus mattis sed consectetur. Ornare cursus neque, sapien,
        tristique lobortis sit porta lectus sit.
      </p>

      <p>
        Amet sed pretium, adipiscing scelerisque. Massa tincidunt varius id
        morbi cras consectetur pharetra. Eget turpis arcu, non odio. Nulla
        phasellus sed tortor enim sed odio accumsan, auctor tincidunt.
        Suspendisse ut fames risus in sed. Duis nisl pharetra tellus laoreet
        sapien, tempus nulla nibh porta. Amet, etiam sem ut aliquam sed nulla
        urna vestibulum ut.
      </p>

      <div class="py-md-4 py-3 mb-2">
        <a href="assets/img/thumb/photo-1500x780--2.jpg" data-fancybox="gallery">
          <img class="w-100" src="assets/img/thumb/photo-1500x780--2.jpg" alt="" />
        </a>
      </div>

      <div class="row">
        <div class="col-lg-10 mx-auto">
          <p class="text-md-center">
            Consectetur amet pulvinar nibh urna. Quis in eget nunc proin lorem
            ac pellentesque. Vulputate feugiat sed euismod sit tincidunt diam
            donec nec. Mattis non, nisi, rhoncus imperdiet velit sit odio
            feugiat arcu. Egestas sed quis vehicula amet. Nunc at quis lacus,
            vitae, cursus netus mattis sed consectetur.
          </p>
        </div>
      </div>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec turpis
        pellentesque penatibus eu. Urna, ac arcu euismod purus convallis. Hac
        nunc, aliquam lorem mauris laoreet aliquam urna, nisl adipiscing.
        Egestas eu pellentesque ut faucibus turpis sed aliquam risus, pulvinar.
        Lacus, ut ultricies amet vel pellentesque. In suspendisse aliquam
        tempus, cras.
      </p>

      <p>
        Nam donec sit phasellus habitant. Nibh etiam volutpat dictumst ut mattis
        neque posuere mauris bibendum. Odio ullamcorper nec vestibulum odio
        turpis mi, aliquam duis. Consectetur amet pulvinar nibh urna. Quis in
        eget nunc proin lorem ac pellentesque. Vulputate feugiat sed euismod sit
        tincidunt diam donec nec. Mattis non, nisi, rhoncus imperdiet velit sit
        odio feugiat arcu. Egestas sed quis vehicula amet. Nunc at quis lacus,
        vitae, cursus netus mattis sed consectetur. Ornare cursus neque, sapien,
        tristique lobortis sit porta lectus sit. Consectetur amet pulvinar nibh
        urna.
      </p>

      <div class="py-md-4 py-3 mb-2">
        <a href="assets/img/thumb/photo-1500x780--3.jpg" data-fancybox="gallery">
          <img class="w-100" src="assets/img/thumb/photo-1500x780--3.jpg" alt="" />
        </a>
      </div>
    </article>
  </div>
</template>

<script>
import dayjs from "dayjs";
import 'dayjs/locale/th'
export default {
    data() {
    return {
      currentDate: ''
    }
  },
  created() {
    dayjs.locale('th')  // set the locale to Thai
    this.currentDate = dayjs().add(543, 'year').format('D MMM YYYY')
  }
};
</script>

<style>
</style>