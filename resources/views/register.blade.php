<!DOCTYPE html>
<html lang="en">
    @include("include.head")

  <body>
    <!-- ======= Header ======= -->
    @include("include.header")
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Register</h2>
            <form action="{{ route('register.post') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!-- STEP 1 START -->
            <div id="step-1" class="form">
              <p class="title">1. Personal Information</p>
              <div class="form-box form-action">
                <div class="form-group">
                  <label for="full_name">Full Name</label>
                  <input
                    type="text"
                    class="form-control custom-input"
                    placeholder="Type here"
                    id="full_name"
                    name="full_name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="mobile_phone">Mobile Phone</label>
                  <input
                    type="text"
                    class="form-control custom-input"
                    placeholder="Type here"
                    id="mobile_phone"
                    name="mobile_phone"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="designation">Designation</label>
                  <input
                    type="text"
                    class="form-control custom-input"
                    placeholder="Type here"
                    id="designation"
                    name="designation"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="company_address">Company Name</label>
                  <input
                    type="text"
                    class="form-control custom-input"
                    placeholder="Type here"
                    id="company_name"
                    name="company_name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="company_address">Company Address</label>
                  <input
                    type="text"
                    class="form-control custom-input"
                    placeholder="Type here"
                    id="company_address"
                    name="company_address"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="company_phone">Company Phone No.</label>
                  <input
                    type="text"
                    class="form-control custom-input"
                    placeholder="Type here"
                    id="company_phone"
                    name="company_phone"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="company_phone">Email</label>
                  <input
                    type="text"
                    class="form-control custom-input"
                    placeholder="Type here"
                    id="email"
                    name="email"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="province">Province (Current Residence)</label>
                  <select class="custom-input-select" name="province_origin" required>
                    @foreach(@$provinsi as $prov)
                    <option value="{{ @$prov->nama }}">{{ @$prov->nama }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="industry">Industry</label>
                  <div class="radio-custom form-check">
                    <input
                      name="industry"
                      type="radio"
                      id="travel_agent"
                      value="Travel Agent"
                      class="form-check-input"
                      onclick="document.getElementById('industry_other').disabled = true;"
                    required
                     
                    />
                    <label for="travel_agent" class="form-check-label"
                      >Travel Agent</label
                    >
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="industry"
                      type="radio"
                      id="mice"
                      value="Mice"
                      class="form-check-input"
                      onclick="document.getElementById('industry_other').disabled = true;"
                    required
                     
                    />
                    <label for="mice" class="form-check-label">Mice</label>
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="industry"
                      type="radio"
                      id="ota"
                      value="OTA"
                      class="form-check-input"
                      onclick="document.getElementById('industry_other').disabled = true;"
                    required
                    />
                    <label for="ota" class="form-check-label">OTA</label>
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="industry"
                      type="radio"
                      id="other"
                      value="Others"
                      class="form-check-input"
                      onclick="document.getElementById('industry_other').disabled = false;"
                    required
                     
                    />
                    <label for="other" class="form-check-label">Others</label>
                    <input
                      type="text"
                      name="industry_other"
                      id="industry_other"
                      value=""
                      class="ml-3 custom-input"
                      placeholder="Type here"
                      required
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label for="industry">Industry Type</label>
                  <div class="radio-custom form-check">
                    <input
                      name="industry_type"
                      type="radio"
                      id="inbound"
                      value="Inbound"
                      class="form-check-input"
                      onclick="document.getElementById('industry_type_other').disabled = true;"
                    required
                     
                    />
                    <label for="inbound" class="form-check-label"
                      >Inbound</label
                    >
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="industry_type"
                      type="radio"
                      id="outbound"
                      value="Outbound"
                      class="form-check-input"
                      onclick="document.getElementById('industry_type_other').disabled = true;"
                    required
                     
                    />
                    <label for="outbound" class="form-check-label"
                      >Outbound</label
                    >
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="industry_type"
                      type="radio"
                      id="inbound_outbound"
                      value="Inbound & Outbound"
                      class="form-check-input"
                      onclick="document.getElementById('industry_type_other').disabled = true;"
                    required
                     
                    />
                    <label for="inbound_outbound" class="form-check-label"
                      >Inbound & Outbound</label
                    >
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="industry_type"
                      type="radio"
                      id="special"
                      value="Special Interest Tour"
                      class="form-check-input"
                      onclick="document.getElementById('industry_type_other').disabled = true;"
                    required
                     
                    />
                    <label for="special" class="form-check-label"
                      >Special Interest Tour</label
                    >
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="industry_type"
                      type="radio"
                      id="ota_type"
                      value="OTA"
                      class="form-check-input"
                      onclick="document.getElementById('industry_type_other').disabled = true;"
                    required
                     
                    />
                    <label for="ota_type" class="form-check-label">OTA</label>
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="industry_type"
                      type="radio"
                      id="other_type"
                      value="Others"
                      class="form-check-input"
                      onclick="document.getElementById('industry_type_other').disabled = false;"
                    required
                     
                    />
                    <label for="other_type" class="form-check-label"
                      >Others</label
                    >
                    <input
                      type="text"
                      name="industry_type_other"
                      id="industry_type_other"
                      value=""
                      class="ml-3 custom-input"
                      placeholder="Type here"
                      required
                    />
                  </div>
                </div>
                <button
                  class="btn-next"
                  id="step_1"
                  type="button"
                  onclick="handleNextStep('step_2')"
                >
                  NEXT
                </button>
              </div>
            </div>
            <!-- END STEP 1 -->

            <!-- START STEP 2 -->
            <div id="step-2" class="form">
              <p class="title">2. Other Information</p>
              <div class="form-box form-action">
                <div class="form-group">
                  <label for="question1"
                    >Has your company resume sales and marketing
                    operation</label
                  >
                  <div class="radio-custom form-check">
                    <input
                      name="question1"
                      type="radio"
                      id="q1-op1"
                      value="Yes"
                      class="form-check-input"
                      required
                    />
                    <label for="q1-op1" class="form-check-label">Yes</label>
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="question1"
                      type="radio"
                      id="q1-op2"
                      value="No"
                      class="form-check-input"
                      required
                    />
                    <label for="q1-op2" class="form-check-label">No</label>
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="question1"
                      type="radio"
                      id="q1-op3"
                      value="Not Fully Operation (Work From Home or Reduced
                      Manpower)"
                      class="form-check-input"
                      required
                    />
                    <label for="q1-op3" class="form-check-label"
                      >Not Fully Operation (Work From Home or Reduced
                      Manpower)</label
                    >
                  </div>
                </div>

                <div class="form-group">
                  <label for="question2"
                    >Have you attended virtual tour sessions/experiences before
                    ?</label
                  >
                  <div class="radio-custom form-check">
                    <input
                      name="question2"
                      type="radio"
                      id="q2-op1"
                      value="Yes"
                      class="form-check-input"
                      onclick="document.getElementById('question3').disabled = false;"
                      required
                    />
                    <label for="q2-op1" class="form-check-label">Yes</label>
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="question2"
                      type="radio"
                      id="q2-op2"
                      value="No"
                      class="form-check-input"
                      onclick="document.getElementById('question3').disabled = true;"
                      required
                    />
                    <label for="q2-op2" class="form-check-label">No</label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="question3"
                    >What are the virtual experiences that you have attended,
                    please list here</label
                  >
                  <input
                    type="text"
                    class="form-control custom-input"
                    placeholder="Type here"
                    id="question3"
                    name="question3"
                    style="width: 480px"
                    value=""
                      required
                  />
                  <p class="text-small mt-1">
                    Example: Virtual Tour of Destination A, Virtual team
                    building activity, live streaming event, etc
                  </p>
                </div>

                <div class="form-group">
                  <label for="question4"
                    >What kinds of virtual tours/experience are you expecting to
                    see and experience from this event ?</label
                  >
                  <div class="checkbox-custom form-check">
                    <input
                      name="question4[]"
                      type="checkbox"
                      id="q4-op1"
                      value="Virtual Walking Tours"
                      class="form-check-input"
                    />
                    <label for="q4-op1" class="form-check-label"
                      >Virtual Walking Tours</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question4[]"
                      type="checkbox"
                      id="q4-op2"
                      value="General Destination Tours"
                      class="form-check-input"
                    />
                    <label for="q4-op2" class="form-check-label"
                      >General Destination Tours</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question4[]"
                      type="checkbox"
                      id="q4-op3"
                      value="Virtual Attraction Guide"
                      class="form-check-input"
                    />
                    <label for="q4-op3" class="form-check-label"
                      >Virtual Attraction Guide</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question4[]"
                      type="checkbox"
                      id="q4-op4"
                      value="Virtual Attraction Guide"
                      class="form-check-input"
                    />
                    <label for="q4-op4" class="form-check-label"
                      >Cultural Precints/Neighbourhood Tours</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question4[]"
                      type="checkbox"
                      id="q4-op5"
                      value="Live Streaming Events"
                      class="form-check-input"
                    />
                    <label for="q4-op5" class="form-check-label"
                      >Live Streaming Events</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question4[]"
                      type="checkbox"
                      id="q4-op6"
                      value="Virtual educational experiences"
                      class="form-check-input"
                    />
                    <label for="q4-op6" class="form-check-label"
                      >Virtual educational experiences</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question4[]"
                      type="checkbox"
                      id="q4-op7"
                      value="Virtual Business Tours"
                      class="form-check-input"
                    />
                    <label for="q4-op7" class="form-check-label"
                      >Virtual Business Tours</label
                    >
                  </div>
                </div>

                <div class="form-group">
                  <label for="question5"
                    >Would you be interested to engage the Singapore tour
                    operators after this event?</label
                  >
                  <div class="radio-custom form-check">
                    <input
                      name="question5"
                      type="radio"
                      id="q5-op1"
                      value="Yes"
                      class="form-check-input"
                      required
                    />
                    <label for="q5-op1" class="form-check-label">Yes</label>
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="question5"
                      type="radio"
                      id="q5-op2"
                      value="No"
                      class="form-check-input"
                      required
                    />
                    <label for="q5-op2" class="form-check-label">No</label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="question6"
                    >What do you think the prospects of promoting and selling
                    virtual tours/experiences during this pandemic for the
                    Indonesian Market?</label
                  >
                  <div class="radio-custom form-check">
                    <input
                      name="question6"
                      type="radio"
                      id="q6-op1"
                      value="Yes"
                      class="form-check-input"
                      onclick="document.getElementById('question6_other').disabled = true;"
                      required
                    />
                    <label for="q6-op1" class="form-check-label"
                      >Yes, there is potential as Indonesians are not able to
                      travel internationally yet</label
                    >
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="question6"
                      type="radio"
                      id="q6-op2"
                      value="No"
                      class="form-check-input"
                      onclick="document.getElementById('question6_other').disabled = true;"
                      required
                    />
                    <label for="q6-op2" class="form-check-label"
                      >No, life is back to normal here and virtual
                      tours/experiences are no longer attractive</label
                    >
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="question6"
                      type="radio"
                      id="q6-op3"
                      value="Other"
                      class="form-check-input"
                      onclick="document.getElementById('question6_other').disabled = false;"
                      required
                    />
                    <label for="q6-op3" class="form-check-label"
                      >Other Comments :</label
                    >
                    <input
                      type="text"
                      class="custom-input"
                      placeholder="Type here"
                      id="question6_other"
                      name="question6_other"
                      style="width: 480px"
                      value=""
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label for="question7"
                    >What are some of your considerations when choosing virtual
                    tour experiences?</label
                  >
                  <div class="checkbox-custom form-check">
                    <input
                      name="question7[]"
                      type="checkbox"
                      id="q7-op1"
                      value="Credibility"
                      class="form-check-input"
                    />
                    <label for="q7-op1" class="form-check-label"
                      >Credibility of the tour provider</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question7[]"
                      type="checkbox"
                      id="q7-op2"
                      value="Price"
                      class="form-check-input"
                    />
                    <label for="q7-op2" class="form-check-label">Price</label>
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question7[]"
                      type="checkbox"
                      id="q7-op3"
                      value="Selecteion"
                      class="form-check-input"
                    />
                    <label for="q7-op3" class="form-check-label"
                      >Selection of tour offerings</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question7[]"
                      type="checkbox"
                      id="q7-op4"
                      value="Duration"
                      class="form-check-input"
                    />
                    <label for="q7-op4" class="form-check-label"
                      >Duration of the tour</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question7[]"
                      type="checkbox"
                      id="q7-op5"
                      value="Language"
                      class="form-check-input"
                    />
                    <label for="q7-op5" class="form-check-label"
                      >Language that is used</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question7[]"
                      type="checkbox"
                      id="q7-op6"
                      value="Innovativeness"
                      class="form-check-input"
                    />
                    <label for="q7-op6" class="form-check-label"
                      >Innovativeness of experience</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question7[]"
                      type="checkbox"
                      id="q7-op7"
                      value="other"
                      class="form-check-input"
                    />
                    <label for="q7-op7" class="form-check-label">Others</label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="question8"
                    >What types of virtual tour experiences in/from singapore
                    would interest you?</label
                  >
                  <div class="checkbox-custom form-check">
                    <input
                      name="question8[]"
                      type="checkbox"
                      id="q8-op1"
                      value="General Destination Tour of Singapores"
                      class="form-check-input"
                    />
                    <label for="q8-op1" class="form-check-label"
                      >General Destination Tour of Singapore</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question8[]"
                      type="checkbox"
                      id="q8-op2"
                      value="Tour of the Cultural Precints"
                      class="form-check-input"
                    />
                    <label for="q8-op2" class="form-check-label"
                      >Tour of the Cultural Precints</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question8[]"
                      type="checkbox"
                      id="q8-op3"
                      value="Cullinary (Food) Tours"
                      class="form-check-input"
                    />
                    <label for="q8-op3" class="form-check-label"
                      >Cullinary (Food) Tours</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question8[]"
                      type="checkbox"
                      id="q8-op4"
                      value="Arts Tours"
                      class="form-check-input"
                    />
                    <label for="q8-op4" class="form-check-label"
                      >Arts Tours</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question8[]"
                      type="checkbox"
                      id="q8-op5"
                      value="Hidden Gems of Singapore Tours"
                      class="form-check-input"
                    />
                    <label for="q8-op5" class="form-check-label"
                      >Hidden Gems of Singapore Tours</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question8[]"
                      type="checkbox"
                      id="q8-op6"
                      value="Team Building experiences"
                      class="form-check-input"
                    />
                    <label for="q8-op6" class="form-check-label"
                      >Team Building experiences</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question8[]"
                      type="checkbox"
                      id="q8-op7"
                      value="Education Tours"
                      class="form-check-input"
                    />
                    <label for="q8-op7" class="form-check-label"
                      >Education Tours</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question8[]"
                      type="checkbox"
                      id="q8-op8"
                      value="Education Tours"
                      class="form-check-input"
                    />
                    <label for="q8-op8" class="form-check-label"
                      >Business Tours</label
                    >
                  </div>
                  <div class="checkbox-custom form-check">
                    <input
                      name="question8[]"
                      type="checkbox"
                      id="q8-op9"
                      value="Education Tours"
                      class="form-check-input"
                    />
                    <label for="q8-op9" class="form-check-label"
                      >Live Streaming events in Singapore</label
                    >
                  </div>
                </div>

                <button
                  class="btn-next"
                  id="step_2"
                  onclick="handleNextStep('step_3')"
                >
                  NEXT
                </button>
              </div>
            </div>
            <!-- END STEP 2 -->

            <!-- STEP 3 START -->
            <div id="step-3" class="form">
              <p class="title">3. Registration of Immersive Virtual Tour</p>
              <label class="desregis">Select only one virtual event experience join. The session is limited. First come first serve basis.
              <br>The details of the virtual tour will be sent through e-mail.
              </label>
              <div class="form-box form-action">
                <div class="form-group">
                  <div class="radio-custom form-check">
                    <input
                      name="question9"
                      type="radio"
                      id="q9-op1"
                      value="satu"
                      class="form-check-input"
                      disabled
                    />
                    <label
                      for="q9-op1"
                      class="form-check-label font-weight-bold"
                      >Everyday Tour Company : <span style="color:#f13643">Halal-friendly Streets and Eats Live Virtual Tour (Closed: Full Capacity)</span></label
                    >
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="question9"
                      type="radio"
                      id="q9-op2"
                      value="dua"
                      class="form-check-input"
                      required
                    />
                    <label for="q9-op2" class="form-check-label font-weight-bold"
                      >Tribe Tour : <span style="color:#f13643">Peranakan Culture</span></label
                    >
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="question9"
                      type="radio"
                      id="q9-op3"
                      value="tiga"
                      class="form-check-input"
                      disabled
                    />
                    <label for="q9-op3" class="form-check-label font-weight-bold"
                      >Monster Day Tours : <span style="color:#f13643">Urban Development in Singapore River  (Closed: Full Capacity)</span></label
                    >
                  </div>
                  <div class="radio-custom form-check">
                    <input
                      name="question9"
                      type="radio"
                      id="q9-op4"
                      value="empat"
                      class="form-check-input"
                      disabled
                    />
                    <label for="q9-op4" class="form-check-label font-weight-bold"
                      >Work 'n' Stroll: <span style="color:#f13643">The Singapore of the future: Innovation tour at the Marina Bay area (Closed: Full Capacity)</span></label
                    >
                  </div>
                </div>
                <div class="card custom-card mt-4">


                  <div class="card-body satu box">
                    <p class="color-red">Halal-friendly Streets and Eats Live Virtual Tour</p>
                    <p style="text-align: justify;">
                    #1 Airbnb Experience in Singapore with 200+ five-star reviews!
                    In this trail, we will discover the diversity of dishes from different ethnic groups in Singapore. The journey is not stopping yet, we’ll bring you in to the secrets behind the best stall of the SG halal cuisine. We will dive into some terrific street art and walk-through atmospheric alleys.
                    </p>
                  </div>

                  
                  <div class="card-body hidefirst dua box">
                    <p class="color-red">Peranakan Culture</p>
                    <p  style="text-align: justify;">
                    We will bring you to visit Kim Choo Kueh Chang, a beloved old-world establishment that specialises in delicious nonya rice dumplings. Through a virtual tour around the heritage shophouse, you will gain a glimpse in understanding the food & ingredients culture of the Peranakans and satisfy your curiosity in the process.
                    </p>
                  </div>

                  
                  <div class="card-body hidefirst tiga box">
                    <p class="color-red">Urban Development in Singapore River</p>
                    <p  style="text-align: justify;">
                    In this trail we will be listening to the stories around the Singapore River meanders through the heart of the Central Business District and the surrounding area such as boat quay, Cavenagh Bridge, Fullerton Hotel and Marina Bay area, and the participants will discover the development story of Singapore from back in 1970s to the present time.
                    </p>
                  </div>

                  
                  <div class="card-body hidefirst empat box">
                    <p class="color-red">The Singapore of the future Innovation tour at the Marina Bay area</p>
                      <p  style="text-align: justify;">
                      In our wok'n'stroll virtual tour, we will have a glimpse to Singapore's future as a city in a garden. With plans for the next 50 years, Singapore is a model for first world countries with clever planning for water solutions, housing projects, greenery and tourism. We will explore the Marina bay area, the Singapore river, Kallang river, the Marina barrage and end our tour at the Gardens by the Bay. It is definitely peek through the window to Singapore of the future
                      </p>
                  </div>


                </div>
                <div class="card custom-card my-4">
                  <div class="card-body">
                    <p class="font-weight-bold">DATA COLLECTION POLICY</p>
                    <p>
                      By submiting this registration, I concent to STB
                      processing my data for the purposes of<br />
                      conducting this webinar and our corporate database. Any
                      personal data we collect from you will <br />be processed
                      inaccordance with our STB Personal Data Protection Policy.
                    </p>
                  </div>
                </div>
                <button type="submit" class="btn-next" id="finish">FINISH</button>
              </div>
            </div>
            <!-- END STEP 3 -->
            </form>
          </div>
        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->
    </main>
    <!-- End #main -->

    <a href="https://wa.me/6282122003303" class="back-to-top"><i class="icofont-brand-whatsapp"></i></a>

    @include("include.script")
  </body>
</html>
