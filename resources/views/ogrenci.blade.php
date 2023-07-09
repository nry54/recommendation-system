@extends('layout') 
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card" key="ETKINLIKLER">
                <div class="card-body">
                    <div class="text-overline">
                    <h5 class="font-weight-black"> ETKINLIKLER </h5> 
                    </div>
                    <v-divider></v-divider>
                    
                    <div style="text-align: center;">
                        <ul>
                            <li class="li-style" @click="tur_belirle('Agamotto')">
                                <div style="margin: 0.5em 0;">
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/icon_agamotto.png?itok=Clq7hvlx" width="72" height="48" alt="Icon Agamotto">
                                </div>

                                <div style="margin-bottom: 0.5em">
                                    Agamotto
                                </div>
                            </li>
                            <li class="li-style" @click="tur_belirle('Kolaj')">
                                <div style="margin: 0.5em 0;">
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/collage-icon.png?itok=Hoa8BcE9" width="72" height="48" alt="Icon Kolaj">
                                </div>
    
                                <div style="margin-bottom: 0.5em">
                                    Kolaj
                                </div>
                            </li>
                            <li class="li-style" @click="tur_belirle('MultipleHotspot')">
                                <div style="margin: 0.5em 0;">
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/image_hotspot-question-icon_0.png?itok=izcslpcs" width="72" height="48" alt="Icon Hotspot">
                                </div>
    
                                <div style="margin-bottom: 0.5em">
                                    Etkin Noktayı Bulma
                                </div>
                            </li>
                            <li class="li-style" @click="tur_belirle('MultipleHotspot')">
                                <div>
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/find-multiple-hotspots.png?itok=Nx1RRbkN" width="72" height="48" alt="Icon MultipleHotspot">
                                </div>
    
                                <div>
                                    Birden Çok Etkin Nokta Bulma
                                </div>
                            </li>
                            <li class="li-style" @click="tur_belirle('ImageJuxtaposition')">
                                <div>
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/before-after-image.png?itok=y9pVecjK" width="72" height="48" alt="Icon ImageJuxtaposition">
                                </div>
    
                                <div>
                                    Yan Yana Resim
                                </div>
                            </li>
                            <li class="li-style" @click="tur_belirle('ImagePairing')">
                                <div>
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/image-pairing.png?itok=CmB7OFmE" width="72" height="48" alt="Icon ImagePairing">
                                </div>
    
                                <div>
                                    Resim Eşleştirme
                                </div>
                            </li>
                            <li class="li-style" @click="tur_belirle('ImageSequencing')">
                                <div>
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/image-sequnce.png?itok=rLcFRQJm" width="72" height="48" alt="Icon ImageSequencing">
                                </div>
    
                                <div>
                                    Resim Sıralama
                                </div>
                            </li>
                            <li class="li-style" @click="tur_belirle('VirtualTour')">
                                <div>
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/virtual-tour-360-icon.png?itok=Dh1fBag1" width="72" height="48" alt="Icon VirtualTour">
                                </div>
    
                                <div>
                                    Sanal Tur
                                </div>
                            </li>
                            <li class="li-style" @click="tur_belirle('ImageSlider')">
                                <div>
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/pictusel-h5p-org.png?itok=RveivzxT" width="72" height="48" alt="Icon ImageSlider">
                                </div>
    
                                <div>
                                    Resim Kaydırma
                                </div>
                            </li>
                            <li class="li-style" @click="tur_belirle('GuessAnswer')">
                                <div>
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/guess-the-answer-icon.png?itok=qZs9uuaw" width="72" height="48" alt="Icon GuessAnswer">
                                </div>
    
                                <div>
                                    Cevabı Tahmin Et
                                </div>
                            </li>
                            <li class="li-style" @click="tur_belirle('ImageChoice')">
                                <div>
                                    <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/image-choice.png?itok=avrVIcAr" width="72" height="48" alt="Icon GuessAnswer">
                                </div>
    
                                <div>
                                    Resim Seçimi
                                </div>
                            </li>
                            <!--################################################################# -->
                                <li class="li-style" @click="tur_belirle('AudioRecorder')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/audio-recorder-icon_0.png?itok=jSIQpAV-" width="72" height="48" alt="Icon AudioRecorder">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Ses Kaydedici
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('Dictation')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/dictation.png?itok=LCANdutG" width="72" height="48" alt="Icon Dictation">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Dikte
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('SpeakWords')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/speak-the-words.png?itok=Dzg6Y0K5" width="72" height="48" alt="Icon SpeakWords">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Kelimeleri Söyle
                                    </div>
                                </li>
                            <!--###################################################################### -->
                                <li class="li-style" @click="tur_belirle('Accordion')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/accordion-icon.png?itok=3_FxT7D1" width="72" height="48" alt="Icon Accordion">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Akordeon
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('DocumentationTool')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/documentation-tool-icon_0.png?itok=hI9hBfgI" width="72" height="48" alt="Icon DocumentationTool">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Dökümantasyon Aracı
                                    </div>
                                </li> 
                                <li class="li-style" @click="tur_belirle('DragWords')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/drag-the-words-icon.png?itok=5EVAIuPn" width="72" height="48" alt="Icon DragWords">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Kelimeleri Sürükle
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('Essay')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/essay.png?itok=85M1jk7u" width="72" height="48" alt="Icon Essay">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Deneme
                                    </div>
                                </li>  
                                <li class="li-style" @click="tur_belirle('FillBlanks')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/fill-in-the-blanks-icon_0.png?itok=6LEp_P0o" width="72" height="48" alt="Icon FillBlanks">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Boşlukları Doldurma
                                    </div>
                                </li> 
                                <li class="li-style" @click="tur_belirle('MarkWords')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/mark-the-words-icon_0.png?itok=0141G93_" width="72" height="48" alt="Icon MarkWords">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Sözcükleri İşaretle
                                    </div>
                                </li> 
                                <li class="li-style" @click="tur_belirle('PersonalityQuiz')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/personality-quiz-icon.png?itok=kK-ceA2t" width="72" height="48" alt="Icon PersonalityQuiz">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Kişilik Testi
                                    </div>
                                </li>  
                                <li class="li-style" @click="tur_belirle('Questionnaire')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/survey-icon-h5p-org.png?itok=el46W6LU" width="72" height="48" alt="Icon Questionnaire">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Anket
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('QuizQuestionSet')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/question-set-icon.png?itok=etOO1Me5" width="72" height="48" alt="Icon QuizQuestionSet">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Test
                                    </div>
                                </li> 
                                <li class="li-style" @click="tur_belirle('AritmeticQuiz')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/basic-arithmetic-quiz-icon-color.png?itok=3Z3UHvqk" width="72" height="48" alt="Icon AritmeticQuiz">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Aritmetik Sınav
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('ComplexFillBlanks')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/advanced-fill-in-the-blanks.png?itok=NJcnv8iU" width="72" height="48" alt="Icon ComplexFillBlanks">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Complex fill the blanks
                                    </div>
                                </li> 
                                <li class="li-style" @click="tur_belirle('MultipleChoice')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/multichoice-icon_0.png?itok=zkNVq9Tq" width="72" height="48" alt="Icon MultipleChoice">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Çoktan Seçme
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('SingleChoiceSet')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/single-choice-set-icon_0.png?itok=RGZ847kp" width="72" height="48" alt="Icon SingleChoiceSet">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Tek Seçimli Set
                                    </div>
                                </li> 
                                <li class="li-style" @click="tur_belirle('TrueFalse')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/true-false.png?itok=u58gdxb2" width="72" height="48" alt="Icon TrueFalse">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Doğru Yanlış Sorusu
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('FindWords')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/word-search-h5porg.png?itok=11OaLF7p" width="72" height="48" alt="Icon FindWords">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Kelime Bul
                                    </div>
                                </li> 
                                <li class="li-style" @click="tur_belirle('Chart')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/chart-icon-color.png?itok=niyEDtPd" width="72" height="48" alt="Icon Chart">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Çizelge
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('Crossword')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/crosswords.png?itok=oiPBRgDE" width="72" height="48" alt="Icon Crossword">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Çapraz Sözcük
                                    </div>
                                </li> 
                                <li class="li-style" @click="tur_belirle('SortParagraphs')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/sort-paragraphs.png?itok=GMw1wP6Y" width="72" height="48" alt="Icon SortParagraphs">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Paragrafları Sırala
                                    </div>
                                </li> 
                                <li class="li-style" @click="tur_belirle('Flashcard')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/flashcards-png-icon.png?itok=J0wStRhZ" width="72" height="48" alt="Icon Flashcard">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Bilgi Kartları
                                    </div>
                                </li> 
                                <li class="li-style" @click="tur_belirle('Summary')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/summary_icon.png?itok=MqEZSWq8" width="72" height="48" alt="Icon Summary">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Özet
                                    </div>
                                </li>
                            <!--###################################################################### -->
                                <li class="li-style" @click="tur_belirle('CoursePresentation')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/logos/course_presentation_icon-colors_0.png" width="72" height="48" alt="Icon CoursePresentation">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Ders Sunumu
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('BrancingScenario')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/logos/branching-scenario-icon.png" width="72" height="48" alt="Icon BrancingScenario">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Dallanma Senaryosu
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('ImageHotspot')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/image-hotspots-icon-color.png?itok=cykDtRI3" width="72" height="48" alt="Icon ImageHotspot">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Image Hotspot
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('InteractiveVideo')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/interactive_video_icon-colors_0.png?itok=guDkjPqz" width="72" height="48" alt="Icon InteractiveVideo">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Interactive Video
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('VirtualTour')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/virtual-tour-360-icon.png?itok=Dh1fBag1" width="72" height="48" alt="Icon VirtualTour">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Virtual Tour
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('Timeline')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/timeline_icon-color.png?itok=QUgXZ8cn" width="72" height="48" alt="Icon Timeline">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Zaman Çizelgesi
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('DragDrop')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/drag-and-drop-icon.png?itok=E-E0vrUu" width="72" height="48" alt="Icon DragDrop">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Sürükle ve Bırak
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('DialogCards')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/dialog_cards_icon-color.png?itok=xeROULBv" width="72" height="48" alt="Icon DialogCards">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        İletişim Kartları
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('MemoryGame')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/memory-game-icon.png?itok=ExMUMvDt" width="72" height="48" alt="Icon MemoryGame">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Hafıza Oyunu
                                    </div>
                                </li>
                                <li class="li-style" @click="tur_belirle('InteractiveBook')">
                                    <div style="margin: 0.5em 0;">
                                        <img src="https://h5p.org/sites/default/files/styles/small-logo/public/logos/interactive-book-icon.png?itok=iubA4XZl" width="72" height="48" alt="Icon InteractiveBook">
                                    </div>

                                    <div style="margin-bottom: 0.5em">
                                        Etkileşimli Kitap
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-12" v-if="etkinlik_tip">
            <div class="genealabs-laravel-messenger modal fade" role="dialog" tabindex="-1" id="myModal" data-backdrop="static">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="overflow: hidden">
                        <div class="modal-header">
                            <h5 class="modal-title"> @{{ etkinlik_tip }} </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-dismiss="modal"></button>
                        </div>
                        <div class="modal-body" v-if="etkinlik_tip=='Agamotto'">
                          <iframe src="https://h5p.org/h5p/embed/79243" width="1090" height="679" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Agamotto"></iframe>
                        </div>
                        <div class="modal-body" v-else-if="etkinlik_tip=='Kolaj'">
                            İçeriği göremiyorsanız lütfen Reuse yazısına tıklayın..
                            <iframe src="https://h5p.org/h5p/embed/2966" width="464" height="25" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Collage"></iframe>
                        </div>
                        <div class="modal-body" v-else-if="etkinlik_tip=='Hotspot'">
                            <iframe src="https://h5p.org/h5p/embed/2926" width="1090" height="379" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Find the Hotspot"></iframe>
                        </div>
                        <div class="modal-body" v-else-if="etkinlik_tip=='MultipleHotspot'">
                            <iframe src="https://h5p.org/h5p/embed/64192" width="1090" height="671" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Find Multiple Hotspots"></iframe>
                        </div>  
                        <div class="modal-body" v-else-if="etkinlik_tip=='ImageJuxtaposition'">
                            <iframe src="https://h5p.org/h5p/embed/64158" width="1090" height="707" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Image Juxtaposition"></iframe>
                        </div> 
                        <div class="modal-body" v-else-if="etkinlik_tip=='ImagePairing'">
                            <iframe src="https://h5p.org/h5p/embed/231629" width="1090" height="737" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Example Content - Image pairing"></iframe>
                        </div> 
                        <div class="modal-body" v-else-if="etkinlik_tip=='ImageSequencing'">
                            <iframe src="https://h5p.org/h5p/embed/107824" width="1090" height="758" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Image Sequencing"></iframe>
                        </div> 
                        <div class="modal-body" v-else-if="etkinlik_tip=='VirtualTour'">
                            <iframe src="https://h5p.org/h5p/embed/439470" width="1090" height="638" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Virtual Tour (360)"></iframe>
                        </div> 
                        <div class="modal-body" v-else-if="etkinlik_tip=='ImageSlider'">
                            <iframe src="https://h5p.org/h5p/embed/128905" width="1090" height="588" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Image slider example content"></iframe>
                        </div>
                        <div class="modal-body" v-else-if="etkinlik_tip=='GuessAnswer'">
                            <iframe src="https://h5p.org/h5p/embed/2398" width="1090" height="578" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Guess the Answer"></iframe>
                        </div>
                        <div class="modal-body" v-else-if="etkinlik_tip=='ImageChoice'">
                            <iframe src="https://h5p.org/h5p/embed/1205734" width="1090" height="938" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Image Choice"></iframe>
                        </div> 
                        <!-- ################################################################ -->
                            <div class="modal-body" v-else-if="etkinlik_tip=='AudioRecorder'">
                                <iframe src="https://h5p.org/h5p/embed/71393" width="1090" height="482" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Audio Recorder"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='Dictation'">
                                <iframe src="https://h5p.org/h5p/embed/387389" width="1090" height="467" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Sherlock Holmes: A study in scarlet"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='SpeakWords'">
                                <iframe src="https://h5p.org/h5p/embed/72682" width="1090" height="179" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Speak the Words"></iframe>
                            </div> 
                        <!-- ############################################################ -->
                            <div class="modal-body" v-else-if="etkinlik_tip=='Accordion'">
                                <iframe src="https://h5p.org/h5p/embed/62954" width="1090" height="483" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Example Content - Accordion"></iframe>
                            </div>  
                            <div class="modal-body" v-else-if="etkinlik_tip=='DocumentationTool'">
                                <iframe src="https://h5p.org/h5p/embed/2924" width="1090" height="731" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Documentation Tool"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='DragWords'">
                                <iframe src="https://h5p.org/h5p/embed/61119" width="1090" height="253" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Tip of the week #3 - Drag the Words"></iframe>
                            </div> 
                            <div class="modal-body" v-else-if="etkinlik_tip=='Essay'">
                                <iframe src="https://h5p.org/h5p/embed/165146" width="1090" height="375" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Essay"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='FillBlanks'">
                                <iframe src="https://h5p.org/h5p/embed/63731" width="1090" height="310" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Example Content - Fill in the blanks"></iframe>
                            </div> 
                            <div class="modal-body" v-else-if="etkinlik_tip=='MarkWords'">
                                <iframe src="https://h5p.org/h5p/embed/1405" width="1090" height="287" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Mark the Words"></iframe>
                            </div> 
                            <div class="modal-body" v-else-if="etkinlik_tip=='PersonalityQuiz'">
                                <iframe src="https://h5p.org/h5p/embed/20635" width="1090" height="441" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Personality Quiz"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='Questionnaire'">
                                <iframe src="https://h5p.org/h5p/embed/29956" width="1090" height="287" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Questionnaire"></iframe>
                            </div>  
                            <div class="modal-body" v-else-if="etkinlik_tip=='QuizQuestionSet'">
                                <iframe src="https://h5p.org/h5p/embed/615" width="1090" height="743" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Quiz (Question Set)"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='AritmeticQuiz'">
                                <iframe src="https://h5p.org/h5p/embed/6725" width="1090" height="389" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Arithmetic Quiz"></iframe>
                            </div> 
                            <div class="modal-body" v-else-if="etkinlik_tip=='ComplexFillBlanks'">
                                <iframe src="https://h5p.org/h5p/embed/500733" width="1090" height="260" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Complex fill the blanks"></iframe>
                            </div> 
                            <div class="modal-body" v-else-if="etkinlik_tip=='MultipleChoice'">
                                <iframe src="https://h5p.org/h5p/embed/712" width="1090" height="583" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Multiple Choice"></iframe>
                            </div> 
                            <div class="modal-body" v-else-if="etkinlik_tip=='SingleChoiceSet'">
                                <iframe src="https://h5p.org/h5p/embed/63799" width="1090" height="232" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Example Content - Single Choice Set"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='TrueFalse'">
                                <iframe src="https://h5p.org/h5p/embed/34141" width="1090" height="652" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="True/False Question"></iframe>
                            </div> 
                            <div class="modal-body" v-else-if="etkinlik_tip=='FindWords'">
                                <iframe src="https://h5p.org/h5p/embed/554805" width="1090" height="879" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Find the words"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='Chart'">
                                <iframe src="https://h5p.org/h5p/embed/6729" width="1090" height="325" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Chart"></iframe>
                            </div> 
                            <div class="modal-body" v-else-if="etkinlik_tip=='Crossword'">
                                <iframe src="https://h5p.org/h5p/embed/1205714" width="1090" height="1036" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Crossword"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='SortParagraphs'">
                                <iframe src="https://h5p.org/h5p/embed/1205723" width="1090" height="577" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Sort the Paragraphs"></iframe>
                            </div> 
                            <div class="modal-body" v-else-if="etkinlik_tip=='Flashcard'">
                                <iframe src="https://h5p.org/h5p/embed/110460" width="1090" height="832" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Flashcards"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='Summary'">
                                <iframe src="https://h5p.org/h5p/embed/713" width="1090" height="227" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Summary"></iframe>
                            </div>
                        <!-- ################################################################ -->
                            <div class="modal-body" v-else-if="etkinlik_tip=='CoursePresentation'">
                                <iframe src="https://h5p.org/h5p/embed/57130" width="1090" height="639" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Gamify your Course Presentations"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='BrancingScenario'">
                                <iframe src="https://h5p.org/h5p/embed/440740" width="1090" height="745" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Example content - Arts of Europe"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='ImageHotspot'">
                                <iframe src="https://h5p.org/h5p/embed/63175" width="1090" height="1145" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Example Content - Image hotspots"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='InteractiveVideo'">
                                <iframe src="https://h5p.org/h5p/embed/27611" width="1090" height="675" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Animal sound game"></iframe>
                            </div>
                           
                            <div class="modal-body" v-else-if="etkinlik_tip=='Timeline'">
                                <iframe src="https://h5p.org/h5p/embed/715" width="1090" height="625" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Timeline"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='DragDrop'">
                                <iframe src="https://h5p.org/h5p/embed/68888" width="1090" height="1185" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Chess Game"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='DialogCards'">
                                <iframe src="https://h5p.org/h5p/embed/619" width="1090" height="645" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Dialog Cards"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='MemoryGame'">
                                <iframe src="https://h5p.org/h5p/embed/707" width="1090" height="232" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Memory Game"></iframe>
                            </div>
                            <div class="modal-body" v-else-if="etkinlik_tip=='InteractiveBook'">
                                <iframe src="https://h5p.org/h5p/embed/439596" width="1090" height="2558" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Interactive Book"></iframe>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card" key="SINAV_SONUC_BILGI">
                <div class="card-body">
                    <div class="text-overline">
                       <h5 class="font-weight-black"> SINAV SONUCUM </h5> 
                    </div>
                    <v-divider></v-divider>
                    
                    <v-layout row wrap>
                        <v-flex xs12 sm6>
                            <span style="font-weight: bold">
                               Sınav Adı: 
                            </span>
                            <span>
                                @{{ sinav_adi }} 
                            </span>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <span style="font-weight: bold">
                                Sınav Giren Öğrenci Sayısı:
                            </span>
                            <span>
                                @{{ toplamOgrenci }} 
                            </span>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <span style="font-weight: bold">
                                Sınav Kodu:
                            </span>
                            <span>
                                @{{ sinav_kodu }} 
                            </span>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <span style="font-weight: bold">
                                Sınava Giren Öğrencilerin Ortalama Başarısı:
                            </span>
                            <span>
                                @{{ ortalama_puan }} 
                            </span>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <span style="font-weight: bold">
                                Başarı Puanım:
                            </span>
                            <span>
                                @{{ basari_puani }} 
                            </span>
                        </v-flex>
                    </v-layout>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card" key="ONERILER">
                <div class="card-body">
                    <div class="text-overline mb-4">
                        <h6 class="font-weight-black"> ÖNERİLER</h6>
                    </div>
                    <v-divider></v-divider>
                    <div v-if="ortalamaninUstundeMi">
                        Puanınız ortalamanın üstünde.. Çok iyi gidiyorsun, aynen bu şekilde çalışmaya devam et. Başarılarının devamını dilerim..
                    </div>
                    <div v-else-if="oneriler">
                        @{{ oneriler }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script> 
    <script>
        let mixinApp = {
            mounted() {
                this.oneriAl();
            },
            data() {
                return {
                    basari_puani:null,
                    sinav_adi:null,
                    sinav_kodu:null,
                    toplamOgrenci: 0,
                    ortalama_puan: null,
                    ortalamaninUstundeMi:false,
                    oneriler:'',
                    dialog_etkinlik: false,
                    etkinlik_tip: '',
                    etkinlik_iframe: '',
                };
            },
            methods: {
                oneriAl() { 
                    axios.post("{{ route('oneriAl') }}")
                    .then(response => {
                        if (!response.data.durum) {
                            return this.uyariAc({
                                baslik: 'Hata',
                                mesaj: response.data.mesaj,
                                tur: "error"
                            });
                        }
                        else {
                            let sonuc = response.data;
                            if(sonuc){
                                if(sonuc["oneriler"]){
                                    vm.oneriler = sonuc["oneriler"];
                                }

                                if(sonuc.sonucOneriler){ 
                                    let sonuc_oneri = sonuc.sonucOneriler;
                                    
                                    if(sonuc_oneri["ogrenci_veri"]) {
                                        let sinav_veri = sonuc_oneri["ogrenci_veri"];
                                        vm.sinav_adi = sinav_veri["ad"];
                                        vm.sinav_kodu = sinav_veri["kod"];
                                        vm.basari_puani = sinav_veri["basari_puani"];
                                    }

                                    if(sonuc_oneri["ortalamaninUstundeMi"]){
                                        vm.ortalamaninUstundeMi = sonuc_oneri["ortalamaninUstundeMi"];
                                    }

                                    if(sonuc_oneri["ogrenci_sayisi"]){
                                        vm.toplamOgrenci = sonuc_oneri["ogrenci_sayisi"];
                                    }

                                    if(sonuc_oneri["ortalama_puan"]){
                                        vm.ortalama_puan = Number(sonuc_oneri["ortalama_puan"].toFixed(2));
                                    }
                                }
                            }
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    });
                },
                tur_belirle(tip) {
                    vm.etkinlik_tip = tip;
                    $(document).ready(function () {
                        $('.genealabs-laravel-messenger.modal').modal('show');
                    });
                },
            },
        };
    </script>
    <style>
        .li-style {
            width: 30%;
            margin: 0 0 4em;
            display: inline-block;
            cursor: grab;
        }
    </style>
@endsection