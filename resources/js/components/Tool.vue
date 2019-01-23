<template>
    <div>
        <heading class="mb-6">Nova SMS</heading>

        <card class="flex flex-col items-center justify-center" style="min-height: 300px">
            <div>
                <div style="text-align: center; margin-top:20px; color:green;" v-show="this.response.status">{{response.msg}}</div>
                <div style="text-align: center; margin-top:20px; color:red;" v-show="!this.response.status">{{response.msg}}</div>
                <div style="text-align: center; margin-top:20px; color:red;">
                    <p v-if="errors.length">
                        <div v-for="error in errors">{{ error }}</div>
                    </p>
                </div>
                <div class="flex border-b border-40">
                    <div class="w-2/8 px-22 py-8">
                        <label class="inline-block" for="mobile_number">
                            Mobile Number
                        </label>
                    </div>
                    <div class="w-2/2 px-8 py-6">
                        <input v-model="mobile_number" type="text" id="mobile_number" class="w-full form-control form-input form-input-bordered" required>
                    </div>
                </div>
                <div class="flex border-b border-40">
                    <div class="w-2/8 px-22 py-8">
                        <label class="inline-block" for="sms_text">
                            SMS Text
                        </label>
                    </div>
                    <div class="w-2/2 px-8 py-6">
                        <textarea v-model="sms_text" type="text" id="sms_text" class="w-full form-control form-input form-input-bordered" style="height: 140px;" cols="40" required></textarea>
                    </div>
                </div>
            </div>
            <div class="px-4 py-2" align="center">
                <button class="ml-auto btn btn-default btn-primary mr-3" @click="sendSMS">Send</button>
            </div>
        </card>
    </div>
</template>

<script>
export default {
  data() {
    return {
      mobile_number: "",
      sms_text: "",
      response: '',
      errors:[],
    }
  },
  mounted() {

  },
  methods: {
    sendSMS() {
      this.errors = [];
      if(!this.mobile_number) {
        this.errors.push("Mobile Number is required.");
      }
      if(!this.sms_text) {
        this.errors.push("SMS Text is required.");
      }
      if(this.errors.length){
        return false;
      }

      Nova.request().post('/nova-vendor/nova-sms/send', {
        mobile_number: this.mobile_number,
        sms_text: this.sms_text
      })
      .then(res => {
        this.response = res.data;
        this.mobile_number = '';
        this.sms_text = '';
      });
    },
  },
}
</script>