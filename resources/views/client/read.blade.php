@extends('layouts.read')

@section('title', 'Đọc truyện Đại quản gia là ma hoàng')

@section('styles')
    <style>
        .slide-up {
            -webkit-animation: slide-up 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: slide-up 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;

        }


        @keyframes slide-up {
            0% {
                -webkit-transform: translateY(100px);
                transform: translateY(100px);
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }
    </style>
@endsection

@section('content')
    <nav class="navbar navbar-expand-md fixed-bottom d-print-none rounded-3 shadow px-0 py-2 text-center" id="nav">
        <div class="mx-auto d-flex gap-3 flex-auto">
            <a href="#" class="btn btn-icon btn-outline-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-back-up">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 14l-4 -4l4 -4" />
                    <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                </svg>
            </a>
            <a href="{{ route('client.home') }}" class="btn btn-icon btn-outline-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
            </a>
            <button id="enableDarkmodeButton" class="nav-link text-light bg-primary opacity-80 px-2 rounded"
                title="Chế độ tối" data-bs-toggle="tooltip" data-bs-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                </svg>
            </button>
            <button id="enableLightmodeButton" class="nav-link text-light bg-primary opacity-80 px-2 rounded"
                title="Chế độ sáng" data-bs-toggle="tooltip" data-bs-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                </svg>
            </button>
            <a href="#" class="btn btn-icon btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-font">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-text-size">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 7v-2h13v2" />
                    <path d="M10 5v14" />
                    <path d="M12 19h-4" />
                    <path d="M15 13v-1h6v1" />
                    <path d="M18 12v7" />
                    <path d="M17 19h2" />
                </svg>
            </a>
            <div class="modal fade" id="modal-font" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p class="fw-bold">Kích thước font chữ</p>
                            <div>
                                <button class="btn btn-icon btn-danger" id="decrement">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-minus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l14 0" />
                                    </svg>
                                </button>
                                <span class="mx-1 fw-bold" id="font-size">16</span>
                                <button class="btn btn-icon btn-primary me-3" id="increment">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 5l0 14" />
                                        <path d="M5 12l14 0" />
                                    </svg>
                                </button>
                                <button class="btn px-2" id="defautl">
                                    Mặc định
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-group">
                <button class="btn btn-icon px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 7l-5 5l5 5" />
                        <path d="M17 7l-5 5l5 5" />
                    </svg>
                </button>
                <select type="text" class="form-select fw-bold" id="select-users" value="">
                    <option value="2">Chapter 1: Đại quản gia là ma hoàng</option>
                    <option value="1">Ma hoàng cái thế</option>
                    <option value="3">Paweł Kuna</option>
                    <option value="4">Nikola Tesla</option>
                </select>
                <button class="btn btn-icon px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-right">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7l5 5l-5 5" />
                        <path d="M13 7l5 5l-5 5" />
                    </svg>
                </button>
            </div>
            <a href="" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-heart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                </svg>
                Yêu thích
            </a>
            <a href="#comment" class="btn btn-outline-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-message-circle-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                </svg>
                Bình luận
            </a>
        </div>
    </nav>

    <div class="content page-wrapper mb-5 container-lg px-5">

        {{-- Xử lý nếu là truyện tranh thì dùng cái này --}}
        <div>
            {{-- @for ($i = 0; $i < 3; $i++)
                <img src="https://i32.ntcdntempv26.com/data/images/109756/1147356/001-07fa813.jpg?data=net" alt="">
            @endfor --}}
        </div>

        {{-- truyện chữ thì dùng cái này --}}
        <div>
            <h2 class="my-5">Chương 01: Ma hoàng cái thế</h2>
            <p class="text-secondary lh-lg" id="text-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Culpa
                distinctio voluptatum
                eligendi quam dolores, illo quas, magni, deleniti fugit dolorum praesentium tenetur enim voluptatem ducimus!
                Est
                provident sed enim aliquid quam, consequatur asperiores ipsam itaque earum voluptates, id cumque voluptatum
                soluta eligendi veritatis tempora voluptatem aspernatur totam minus tempore dicta hic. Commodi ducimus
                molestiae
                sint totam quam explicabo animi, sed libero, omnis, fuga veniam aut laborum ex possimus optio saepe modi et
                iste
                architecto ea assumenda maxime. Repellendus a, sed ex cum eveniet modi praesentium facilis fuga nobis
                corporis
                odit ut pariatur necessitatibus voluptatem, harum, doloremque accusamus assumenda odio qui nam dolore
                maiores
                fugiat facere officia! Consequatur dolore vitae culpa inventore qui minima voluptatum deleniti veniam?
                Veritatis
                ratione eveniet adipisci nesciunt! Quibusdam placeat itaque libero suscipit accusantium sint laboriosam,
                totam
                illum, laborum dicta esse, quis adipisci quidem iusto doloribus quo corporis tenetur rem blanditiis facilis
                minima! At voluptate consectetur unde architecto quibusdam tempora omnis asperiores quo commodi molestias
                dolorum vel repellat minima, consequuntur excepturi tempore quis earum nihil magni odio sint quas, minus
                quos!
                Culpa qui voluptatem in ex? Enim tenetur dolorum alias, pariatur et iure tempora reprehenderit perspiciatis
                eum
                earum laboriosam saepe ratione nemo nisi cumque labore omnis impedit vitae. Nesciunt beatae eveniet illo
                voluptatem vel est odio consectetur dicta, placeat itaque id sequi illum voluptas velit accusamus hic vero
                provident et architecto eligendi saepe nihil. Quia reprehenderit, illum labore asperiores magnam numquam
                exercitationem pariatur laborum veritatis ipsa nihil vel quam hic neque laudantium amet facilis consectetur.
                Ab
                porro quibusdam rerum hic minus molestias inventore harum perferendis assumenda quaerat molestiae nobis enim
                dolor placeat tempora aut voluptate velit architecto, nesciunt illum unde at ratione veniam. Quasi provident
                natus aut! Neque repellat aliquid corporis voluptatum? Aspernatur cum repellendus, numquam officiis non,
                culpa
                provident expedita perferendis minus mollitia totam ducimus earum doloremque? Ab totam porro tempora
                corporis
                mollitia, similique, deserunt laudantium eum unde aperiam saepe? Quo ab dolor expedita sunt voluptas,
                delectus
                dolorem ex saepe, nostrum aperiam corporis odit. Repellat ipsa distinctio consequuntur dicta voluptatum,
                nesciunt, optio provident ab similique magni debitis assumenda excepturi quae ullam eos? Accusantium
                voluptas
                placeat quae fugiat. Eveniet nam molestias voluptate quod sed ullam, laudantium magnam voluptatum natus
                quisquam
                quia ad ipsa nemo sunt. Ipsum magni deserunt eius amet repudiandae ratione deleniti perferendis
                necessitatibus
                qui enim quod corrupti labore iure cupiditate molestiae soluta dolorum consequuntur explicabo possimus
                consequatur quasi, maxime inventore aspernatur. Laudantium, accusantium officiis, qui ipsa corrupti vitae
                non,
                inventore asperiores minima assumenda eveniet dolor rem ut dolore delectus praesentium dignissimos animi
                dolores
                molestiae dolorum. Commodi laudantium quos aliquid voluptatem laboriosam temporibus maxime, ex tenetur quas
                nulla obcaecati quam natus voluptates adipisci? Eveniet, fugiat iste sunt, dolores quasi optio, nobis
                nostrum
                veniam vero doloremque quidem odit! Eius placeat officiis corrupti, voluptatem repellendus in delectus dicta
                asperiores sed animi magnam suscipit officia odit explicabo dolore nostrum ut quo facere sint error beatae.
                Ipsum porro, voluptas qui, iure ad animi natus voluptatibus laudantium quidem autem delectus quaerat vel,
                nihil
                adipisci similique tenetur quam accusamus itaque. Quisquam sequi recusandae aspernatur ad ipsa, neque
                consequatur accusamus aut necessitatibus quibusdam quaerat quos! Laborum et laboriosam harum iusto
                reiciendis
                doloribus vitae quam maxime cupiditate nihil expedita recusandae voluptates iure illo corrupti itaque
                eligendi
                inventore saepe, explicabo sit, enim fuga animi? Repellendus placeat culpa vel vitae beatae sunt incidunt
                voluptate a dolores dignissimos aliquid pariatur minima rerum ratione maiores architecto ipsum, fuga alias
                ea?
                Facere expedita nam natus explicabo odit debitis ullam adipisci, velit provident porro culpa dolore in esse
                amet
                exercitationem dolorum ducimus quae maiores dolorem nulla fugiat. Odio sed itaque totam pariatur tempora
                consequatur sequi natus, omnis delectus officia asperiores at quidem non? Voluptatibus impedit distinctio
                similique illo labore! Dignissimos modi, omnis rerum sit animi doloribus esse ullam, laboriosam, laborum
                quae
                voluptates unde vel voluptas ad perferendis eligendi quia numquam necessitatibus facilis in? Voluptas
                reiciendis
                laboriosam sapiente hic maxime nostrum dicta officia, iure tempore molestias quidem assumenda ea ut cumque
                accusantium animi dolorem, quam quae, voluptatibus enim illum! Magni voluptatum perferendis blanditiis
                necessitatibus dolorum inventore sunt ut? Laudantium perspiciatis et, consequuntur quidem aliquam incidunt
                tempore quae facilis nisi facere culpa nihil quibusdam maxime voluptatum maiores, nostrum aperiam distinctio
                quaerat ullam ipsum. Perferendis, nobis soluta ipsam repellat natus voluptate quo beatae ex exercitationem
                placeat voluptas quam aperiam laudantium incidunt ullam maiores! Repellendus enim dolor libero quasi
                reprehenderit quisquam quaerat deserunt maiores fugit nihil. Eveniet quo dicta, aperiam provident
                perferendis
                placeat, doloremque iste minus atque impedit dolor soluta. Porro dolorum atque praesentium id rerum odit
                ipsam
                repellat cumque libero ullam nemo voluptate facere molestiae pariatur deleniti sunt quo aperiam tempore
                magni
                possimus dolore, cupiditate maxime harum minus. Minima fugit, eius non doloribus, incidunt expedita, quos
                atque
                cupiditate odit repellendus consequuntur doloremque enim nostrum distinctio porro exercitationem rerum!
                Explicabo delectus neque ducimus excepturi ex aspernatur itaque. Earum soluta, praesentium nisi deleniti
                perferendis accusamus minus quo quia, eos id itaque voluptates quod incidunt quasi doloremque quae suscipit
                deserunt sed. Soluta odio ut eaque numquam consequuntur mollitia veritatis atque doloribus fugiat,
                recusandae
                modi nostrum consectetur minima debitis at vel doloremque. Inventore earum dignissimos eos omnis illum
                consequatur explicabo tempore similique, iusto, commodi est! Earum dolorem, consectetur necessitatibus
                asperiores rerum consequuntur provident ex? Odio illo tempora, ipsum, amet fuga praesentium aliquid sequi
                quas
                iusto reiciendis atque modi nobis ducimus. Modi mollitia magnam reiciendis! Recusandae laudantium, earum
                nostrum, molestias nemo possimus est dolorem blanditiis molestiae, quos exercitationem? Doloremque deserunt
                aliquam, eius id amet ipsam in quidem delectus nulla, veniam nostrum. Voluptatem laudantium autem obcaecati
                numquam? Expedita labore nostrum magnam quisquam iure, aliquam tempora incidunt dolore, nihil ex iste.
                Reprehenderit maxime atque corporis in dicta ad! Mollitia, ipsa veritatis incidunt quam ducimus iusto autem
                ea
                recusandae corrupti adipisci, architecto officia, facere exercitationem repellendus labore explicabo.
                Architecto
                accusamus recusandae hic ipsum nemo tenetur eum cum expedita et quos nesciunt tempora, accusantium vero
                numquam
                eligendi fugiat, voluptas blanditiis aliquid harum, laborum ex id ut. Autem non praesentium, ipsam
                doloremque
                omnis alias repellat placeat doloribus quibusdam maxime nulla qui sequi ipsa, enim quo aliquam numquam,
                voluptas
                magnam totam officiis delectus beatae corrupti minima reiciendis? Quo assumenda vel dolorem fugiat sit
                accusamus, velit saepe aperiam minima ea veritatis, nihil aut earum. Assumenda, maiores! Doloremque nihil
                explicabo dolor. Commodi dignissimos laborum minus facilis atque quos cupiditate! Nesciunt, placeat!
                Mollitia
                saepe ipsam, eveniet sunt eos magni corrupti, quaerat, velit quo dicta atque vero numquam eum cum. Nulla
                repellat soluta, eligendi eum nihil nemo dolorem exercitationem consequuntur porro cumque, dolore totam eos
                odio, amet mollitia accusantium voluptatum obcaecati vel harum facere provident. Iste corporis saepe modi
                consequuntur eveniet reprehenderit facere incidunt libero molestias nisi, optio debitis vitae molestiae,
                officia
                consequatur quisquam laboriosam, ipsum excepturi? Tempore similique fuga voluptas voluptatem maiores,
                officia
                dolorum quibusdam harum quo, doloribus sit rem. Quae accusantium quasi distinctio vitae non ea perspiciatis
                nemo
                voluptatibus itaque autem. Ea laudantium corrupti nobis unde, alias odit minus beatae adipisci quod
                doloribus
                atque tempore a natus! Itaque, fugit ratione vitae odit quis quo consectetur sit debitis ad maxime
                voluptates
                impedit, provident ex dignissimos distinctio, dolor voluptatibus quas est porro eligendi expedita rerum
                enim.
                Aut magni eligendi veritatis distinctio, aliquid eaque amet blanditiis dicta? Sunt amet eaque expedita
                laudantium obcaecati corrupti, labore nobis vel repellat impedit adipisci voluptatem fugit culpa beatae
                architecto quod alias distinctio esse eum soluta quia molestias! Aut deleniti voluptatem vero amet, non, cum
                sit
                eveniet officia reiciendis illum suscipit magni? Qui doloremque quidem officia accusantium, labore fuga a ad
                culpa temporibus odit accusamus sit! Pariatur cupiditate nisi fugit eos, vel ullam perferendis dicta. Ipsa
                accusamus nihil iste porro voluptatibus eius doloribus sed molestiae laborum, itaque minus, illo mollitia
                accusantium officia nulla! Enim alias vitae expedita, soluta sequi omnis deserunt dolorum. Possimus
                reiciendis
                eum harum? Suscipit unde consequatur dicta eum impedit quibusdam, beatae asperiores, est possimus ipsa
                deserunt
                eius. Ratione commodi sed debitis reiciendis, ad repudiandae sapiente, ea accusamus labore rem temporibus
                officiis officia nobis sunt nihil recusandae dolore! Explicabo dolorem nesciunt porro nam tempora ratione
                harum,
                eligendi quod esse. Labore, est? Minus quia possimus, cupiditate illum amet nulla corporis temporibus qui
                beatae
                at. Officiis tempore perferendis alias, sed deserunt saepe vel quis amet rem laudantium modi porro natus
                voluptate pariatur, sapiente nesciunt! Quae ea accusantium culpa aliquam animi vitae. Fugiat perferendis
                nemo
                unde quae porro dignissimos minima quam id quo illo aperiam quis itaque nesciunt, error assumenda illum
                pariatur
                voluptas repudiandae vel adipisci consequuntur! Non modi quidem saepe ea, animi quibusdam, reiciendis harum
                doloribus quo illum eveniet amet perferendis doloremque velit temporibus libero adipisci beatae
                consequuntur!
                Culpa, dolorum dolorem! Necessitatibus, dolor quis. Quam autem, possimus facilis necessitatibus sapiente
                nemo
                exercitationem optio pariatur ex aspernatur! Consequatur vitae expedita beatae maiores saepe, necessitatibus
                pariatur, corporis enim dolorum provident repudiandae rerum accusamus doloribus quasi modi iure. Voluptates
                dolore tempora, consequuntur commodi, provident quasi adipisci repudiandae aspernatur quas ducimus itaque
                velit
                nobis vitae quaerat exercitationem rem voluptatem explicabo facere tenetur minus esse, veniam minima! Porro
                autem corrupti soluta, id vel cupiditate nulla quidem quia expedita eligendi iure vero aliquid tenetur, quis
                illum aspernatur accusamus exercitationem est quos nostrum quam odit amet iste! Doloremque fugiat
                dignissimos
                rerum omnis numquam quaerat aliquid eaque ratione nostrum totam nobis, velit dolorem voluptatum labore
                placeat
                necessitatibus amet pariatur fuga nemo accusamus asperiores dolorum? Assumenda nobis est consequatur
                suscipit,
                deleniti modi dolorum, autem ex explicabo cumque, accusantium ipsum sequi ad cupiditate natus necessitatibus
                doloremque alias delectus maiores porro ducimus eum. Laboriosam minus, voluptatem vel laborum itaque alias
                dolores! Possimus aperiam incidunt obcaecati quia dolore veritatis error excepturi minus soluta sed cumque
                similique, doloremque labore accusantium repudiandae necessitatibus magnam, modi molestias id ullam
                reiciendis
                voluptatibus veniam? Dolores explicabo iure perferendis illo nesciunt, saepe dolorum velit? Laboriosam odio
                vel,
                perspiciatis deleniti iusto reprehenderit iure tempora eveniet ex nemo cum doloremque eligendi ipsum sed
                eaque,
                minus suscipit, earum voluptates non. Est totam doloribus quos culpa aliquam voluptates vel impedit natus
                nobis,
                ex autem illum laboriosam harum itaque nisi nostrum, esse tempore minus quasi beatae vero ipsum tenetur
                fugiat
                maiores. Quo iure recusandae possimus quam eligendi porro sapiente quasi aliquid tempore sint quae, odio,
                amet
                molestiae earum vel. Modi natus ad, quo necessitatibus dolore est facere! Quisquam, velit numquam nam
                officia
                culpa maxime commodi consequuntur quidem aut tempore perferendis temporibus est repudiandae veniam,
                aspernatur
                deserunt laboriosam eos. Qui doloremque autem porro officia, labore, voluptas consequuntur at laborum
                repudiandae laboriosam explicabo excepturi quia dicta expedita atque adipisci beatae necessitatibus quis
                numquam
                mollitia possimus a saepe culpa ab! Voluptatem ipsum est reiciendis unde odit id aut pariatur ex quasi
                deserunt
                beatae, ad delectus, veritatis accusamus, maiores ullam animi laudantium earum praesentium saepe officiis
                commodi voluptas labore sequi. Iure, animi doloribus. Ad ipsum corporis autem, sint fugit id ut illo
                perspiciatis magnam ducimus consectetur dolorum sit iste odio perferendis veritatis est deserunt, voluptatum
                quasi nesciunt tenetur ullam? Aperiam, in aliquid obcaecati sit facere ullam eveniet possimus! Vel,
                sapiente.
                Repudiandae minus velit modi autem, optio libero at voluptas qui numquam eum repellendus placeat obcaecati
                hic
                deleniti quae possimus perferendis nobis nam quidem laudantium fuga blanditiis accusantium illum. Architecto
                omnis hic esse dolore ex libero earum sit, doloribus et possimus distinctio deserunt, sint quam accusantium,
                dolor voluptatibus! Minus quia expedita nisi. Illo harum beatae soluta consequuntur cupiditate ut officiis
                voluptatibus iusto, magni, quae neque assumenda dolore aperiam eum unde quo. Id odit ipsa exercitationem
                provident debitis quisquam. Illum quas, voluptatem omnis aspernatur, veritatis consequatur ullam minima at
                sint
                dignissimos est beatae? Unde, beatae laborum. Accusantium recusandae earum, obcaecati nobis rerum atque
                incidunt
                harum explicabo sequi eligendi adipisci hic amet reiciendis aperiam exercitationem magni iure eveniet sed.
                Quae,
                adipisci? Maxime modi aut, distinctio tempora reiciendis repellendus voluptate velit quibusdam earum,
                praesentium odio placeat deleniti nulla perspiciatis quam quasi sequi excepturi laborum facilis voluptatem
                eveniet magnam? Voluptatum, quasi, atque repellendus quisquam eligendi ad maiores fugiat tempore tenetur,
                laborum animi voluptatem maxime velit ducimus consectetur dicta nemo. Sit, maiores at consectetur omnis
                recusandae asperiores voluptatem nobis quam repellat possimus, sapiente doloribus et doloremque fuga dolores
                reprehenderit quidem temporibus dolore nisi. Accusantium sapiente laboriosam alias quae, corrupti, commodi
                vero
                deleniti non veritatis, itaque eligendi voluptas. Rerum commodi facilis voluptatem alias dolore provident,
                totam
                dolorem quam necessitatibus facere, labore blanditiis nesciunt. Itaque magni inventore voluptatum nisi
                dolores
                ab deleniti perspiciatis, natus unde earum optio esse tenetur? Magni, alias sed eaque quisquam adipisci odio
                repellat optio libero excepturi assumenda cum, omnis natus nihil laboriosam earum eum illum repudiandae
                minima
                nemo. Obcaecati iusto sit nulla eligendi minima ducimus temporibus voluptate accusamus sed, explicabo
                maiores
                dolorum architecto vero reiciendis aperiam quia quam error beatae ratione aliquid? Excepturi, voluptates ad.
                Harum deserunt debitis commodi corporis expedita omnis sunt est quam repellat earum vitae facilis doloribus
                nobis qui doloremque perspiciatis quidem minima quas ipsa ipsam, repellendus quae consequatur magnam
                reprehenderit! Odit repellendus tempora atque culpa quas ipsa ad? Assumenda dolore maiores quidem nihil
                magni
                molestiae voluptatum tempore minus dolorem non eveniet sunt vero tenetur est laborum fuga, consectetur
                architecto quaerat repellendus fugiat repellat. Distinctio, illum veniam dolorem perferendis nisi ea
                tempora,
                veritatis optio sint cupiditate unde eos quae vel iure omnis quos? Nihil similique quis excepturi soluta
                deserunt. Sapiente laboriosam, error possimus ipsam provident quam magnam pariatur vel dolorum sunt? Cum ut
                odio, ducimus debitis dicta ratione, modi magnam voluptas, sed minima dolorem commodi nostrum vel rerum
                dolor et
                expedita hic aut voluptatum minus quibusdam impedit eos sit. Corrupti fugiat quasi aliquid obcaecati nihil
                inventore cum reiciendis, sint neque quidem hic ipsa doloremque consectetur totam aliquam assumenda culpa
                eos
                autem asperiores veniam debitis, nesciunt velit! Aliquid deleniti autem recusandae rem, illo voluptate iste
                est
                esse sit iure architecto odit blanditiis ad officiis harum libero obcaecati consequatur reprehenderit,
                assumenda
                tenetur repellat. Autem similique expedita dolorum quia accusamus pariatur quam natus ipsum dolores nam,
                vero
                ullam dolore minus officia voluptates numquam voluptatum enim corporis maxime. Maiores, quaerat. Qui ratione
                autem accusamus eos, possimus voluptatibus numquam facere aspernatur quia quod ipsam eligendi? Quisquam
                deleniti
                natus suscipit, optio quas blanditiis! Delectus dolorum esse aperiam possimus, dignissimos voluptates natus
                numquam quis perferendis cupiditate qui eos recusandae quibusdam saepe dolorem id optio! Doloremque
                blanditiis
                distinctio illum error autem perspiciatis natus excepturi fugiat laboriosam, numquam deleniti qui soluta hic
                repudiandae beatae vel iure facilis velit sapiente tempore fuga est et adipisci? At, quisquam libero!
                Excepturi
                tempore ipsa placeat voluptates exercitationem eligendi recusandae odit modi ab. Aspernatur dolore quis ipsa
                quia quasi nisi ut totam sunt quod officiis rem omnis eos assumenda accusamus tempore repudiandae, veniam
                eius
                harum fuga voluptatibus repellendus illo! Blanditiis, obcaecati vel atque voluptatum a facere iste.
                Doloribus
                commodi ab possimus illo, facere nihil quisquam tempora ea deserunt quae voluptatibus a soluta odio sapiente
                alias quasi harum, corporis maxime eius accusantium iusto ut, earum temporibus! Sint quisquam ab tempora
                commodi, dicta quod sunt, cum sed officiis minima illo fugiat possimus, unde ea nulla nihil culpa dolorum
                error
                molestiae? Iste aperiam, dicta, repudiandae neque minus magnam assumenda quaerat fugit molestiae atque
                voluptatibus nostrum corrupti similique. Quae quia doloremque placeat asperiores obcaecati, inventore ipsum
                aut!
                Architecto iure illo laboriosam temporibus facere quo voluptate, odit eveniet corporis doloribus animi
                nesciunt
                quas asperiores labore blanditiis suscipit mollitia expedita culpa, aliquid quasi molestias. Enim incidunt
                optio
                beatae accusantium odio a debitis dolor ullam voluptas excepturi! Explicabo, earum cum excepturi at beatae
                sed
                quod vel incidunt expedita, totam perspiciatis. Earum aut doloremque eius hic magnam iure sit temporibus.
                Assumenda qui hic nulla. Ab veniam non nulla saepe? Eaque laborum ipsa in eos dolorem soluta beatae quis, id
                obcaecati! Unde suscipit, corporis nisi ipsum dolore quae veritatis enim voluptates neque consequuntur,
                impedit
                molestiae esse incidunt. Consectetur accusantium ipsam fuga. Praesentium voluptas accusantium neque dolorum
                quo
                dolorem architecto non magnam nobis? Autem excepturi iste perspiciatis aliquid doloribus enim placeat
                necessitatibus ex quasi id itaque harum nisi a, cum qui eveniet amet rerum ab fuga pariatur! Facilis non sit
                architecto doloremque deserunt ipsa vero fugiat nisi. Rerum corporis quidem animi consequatur quisquam!
                Nobis,
                tenetur asperiores? Sed suscipit ratione aspernatur autem excepturi. Maxime excepturi esse libero veniam,
                minus
                totam nisi dolore quod vitae pariatur maiores? Ipsam fugit similique animi odio nam natus ipsa earum
                nesciunt
                dolor beatae aperiam molestias vero officiis, ea rem assumenda alias consequatur incidunt facilis iure quas
                reiciendis. Unde animi enim rerum quos atque tenetur in expedita fugiat, aliquam reiciendis eum quaerat sit?
                Adipisci, ratione minus, libero voluptates, quae maxime tenetur modi corrupti assumenda nihil repellat harum
                in
                doloribus facilis. Placeat illo ab rem optio. Mollitia minus nulla beatae libero non sunt rem molestiae
                pariatur
                et, laudantium error assumenda quo quas autem soluta nisi aliquid iure culpa sed, ipsam atque quam dolorem.
                Consequatur illum beatae inventore cum est placeat voluptatibus repellat delectus sed, omnis obcaecati,
                molestiae alias voluptatem fuga illo ducimus amet asperiores mollitia? Reiciendis doloribus omnis facilis
                animi
                veniam minus cum, laboriosam doloremque asperiores veritatis sequi delectus esse cumque, ea quasi eligendi
                placeat nihil necessitatibus. Consequatur ex, nemo possimus accusantium rem odio, officia hic eligendi dolor
                quam, ducimus voluptate a! Dolor vitae similique consequatur beatae a, enim laborum molestias unde aut ad
                quo
                est quae repudiandae officiis dignissimos assumenda voluptate magnam! Enim fugit nam praesentium eveniet
                consectetur officiis atque laboriosam deserunt cumque nulla, molestiae, neque, quisquam obcaecati amet
                facere
                quasi et dolor at inventore mollitia impedit tenetur numquam sit provident. Libero harum corporis totam amet
                quaerat velit possimus officia eaque id, in illum ut fugit consequuntur suscipit adipisci corrupti facilis
                fuga
                provident tempora. Libero dolores laudantium, consequatur eius exercitationem excepturi. Tenetur nihil saepe
                tempora modi sint libero architecto inventore, natus asperiores totam eius animi voluptates officiis
                adipisci
                quos nam provident impedit quaerat obcaecati rerum cumque. Id ipsa nesciunt ipsum harum quidem animi
                distinctio,
                autem rem quod consectetur illum, impedit ab consequatur dolorem asperiores libero doloremque alias?
                Assumenda
                amet aliquid totam porro saepe inventore eius vel beatae facilis dolor quasi, dolorem accusamus, quaerat
                minus
                exercitationem nostrum delectus vero fuga corporis quo magnam? Veniam asperiores repellat tenetur aliquid
                dolorum velit possimus. Nam, accusantium! Nihil laudantium dolores voluptatibus placeat quos labore a modi
                perferendis! Autem veniam eligendi voluptatem mollitia officia ratione doloribus explicabo recusandae
                temporibus
                reiciendis itaque non inventore dignissimos, adipisci consequatur quos? Maiores dolorem corporis ullam
                beatae
                maxime sit, veritatis nam quaerat accusantium ducimus numquam pariatur aut sed nulla illum nobis saepe fuga
                distinctio.
            </p>
        </div>

        {{-- truyện audio thì dùng cái này --}}
        {{-- <div class="card p-5 my-5">
            <div class="row align-items-center">
                <div class="col-auto fw-bold">
                    <button class="btn btn-icon me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-player-skip-back">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M20 5v14l-12 -7z" />
                            <path d="M4 5l0 14" />
                        </svg>
                    </button>
                    <button class="btn btn-icon me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-player-play">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 4v16l13 -8z" />
                        </svg>
                    </button>
                    <button class="btn btn-icon me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-player-skip-forward">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 5v14l12 -7z" />
                            <path d="M20 5l0 14" />
                        </svg>
                    </button>
                    Chapter 01: Ma hoàng cái thế
                </div>
                <div class="col">
                    <audio preload="true">
                        <source src="#">
                    </audio>
                    <div class="d-flex align-items-center gap-3">
                        <div class="progress" style="height: 3px">
                            <div class="progress-bar" style="width: 38%" role="progressbar" aria-valuenow="38"
                                aria-valuemin="0" aria-valuemax="100" aria-label="38% Complete">
                                <span class="visually-hidden">38% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto text-secondary">
                    03:41
                </div>
                <div class="col-auto">
                    <a href="#" class="link-secondary">
                        <button class="switch-icon" data-bs-toggle="switch-icon">
                            <span class="switch-icon-a text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                            </span>
                            <span class="switch-icon-b text-red">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </div> --}}

    </div>

    <div class="row container mx-auto px-5 mb-5" id="comment">
        <div class="card p-5">
            <h4 class="card-title fw-bold text-uppercase text-primary">bình luận</h4>
            <div class="card-body scrollable">
                <div class="chat">
                    <div class="chat-bubbles">

                        {{-- Nếu là của mình thì lấy cái này --}}
                        <div class="chat-item">
                            <div class="row align-items-end justify-content-end">
                                <div class="col col-lg-6">
                                    <div class="chat-bubble chat-bubble-me">
                                        <div class="chat-bubble-title">
                                            <div class="row">
                                                <div class="col chat-bubble-author">
                                                    <span>Đỗ Hồng Quân</span>
                                                    <span class="badge me-3">Chí tôn</span>
                                                    <a href="#" class="small">Chap 312</a>
                                                </div>
                                                <div class="col-auto chat-bubble-date">09:32</div>
                                            </div>
                                        </div>
                                        <hr class="my-2">
                                        <div class="chat-bubble-body mb-4">
                                            <p>Truyện hay vãi loè</p>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-message-circle">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M3 20l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c3.255 2.777 3.695 7.266 1.029 10.501c-2.666 3.235 -7.615 4.215 -11.574 2.293l-4.7 1" />
                                                </svg>
                                                Trả lời
                                            </span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-up">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                                                </svg>
                                                0
                                            </span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-down">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M7 13v-8a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v7a1 1 0 0 0 1 1h3a4 4 0 0 1 4 4v1a2 2 0 0 0 4 0v-5h3a2 2 0 0 0 2 -2l-1 -5a2 3 0 0 0 -2 -2h-7a3 3 0 0 0 -3 3" />
                                                </svg>
                                                0
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto"><span class="avatar"
                                        style="background-image: url(https://preview.tabler.io/static/avatars/000f.jpg)"></span>
                                </div>
                            </div>
                        </div>

                        {{-- Nếu là của người khác thì lấy cái này --}}
                        <div class="chat-item">
                            <div class="row align-items-end">
                                <div class="col-auto"><span class="avatar"
                                        style="background-image: url(https://preview.tabler.io/static/avatars/000f.jpg)"></span>
                                </div>
                                <div class="col col-lg-6">
                                    <div class="chat-bubble">
                                        <div class="chat-bubble-title">
                                            <div class="row">
                                                <div class="col chat-bubble-author">
                                                    <div class="col chat-bubble-author">
                                                        <span>Linka</span>
                                                        <span class="badge me-3">Chí tôn</span>
                                                        <a href="#" class="small">Chap 312</a>
                                                    </div>
                                                </div>
                                                <div class="col-auto chat-bubble-date">09:34</div>
                                            </div>
                                        </div>
                                        <hr class="my-2">
                                        <div class="chat-bubble-body mb-4">
                                            <p>Như bòi</p>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-message-circle">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M3 20l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c3.255 2.777 3.695 7.266 1.029 10.501c-2.666 3.235 -7.615 4.215 -11.574 2.293l-4.7 1" />
                                                </svg>
                                                Trả lời
                                            </span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-up">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                                                </svg>
                                                0
                                            </span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-down">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M7 13v-8a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v7a1 1 0 0 0 1 1h3a4 4 0 0 1 4 4v1a2 2 0 0 0 4 0v-5h3a2 2 0 0 0 2 -2l-1 -5a2 3 0 0 0 -2 -2h-7a3 3 0 0 0 -3 3" />
                                                </svg>
                                                0
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-red mb-3">Tính năng yêu cầu đăng nhập</p>
                <form action="">
                    <div class="input-group input-group-flat mb-3">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Nhập nội dung" />
                        <button class="btn btn-success">Bình luận</button>
                    </div>
                    <div class="d-flex gap-2">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="rounded border p-2">
                                <img src="https://st.nettruyenff.com/Data/Sites/1/skins/comic/images/emo/trollface.png"
                                    width="50px" alt="">
                            </div>
                        @endfor
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Xử lý cuộn trang

        let previousScrollPosition = window.pageYOffset;

        const nav = document.querySelector('#nav')

        window.addEventListener('scroll', function() {
            let currentScrollPosition = window.pageYOffset;

            if (currentScrollPosition > previousScrollPosition) {
                nav.classList.add('d-none')
            } else {
                nav.classList.add('slide-up')
                nav.classList.remove('d-none')
            }

            previousScrollPosition = currentScrollPosition;
        });

        // Xử lý darkmode

        var themeStorageKey = "tablerTheme";
        var defaultTheme = "light";

        function toggleTheme() {
            var selectedTheme = localStorage.getItem(themeStorageKey) || defaultTheme;

            selectedTheme = selectedTheme === 'dark' ? 'light' : 'dark';

            localStorage.setItem(themeStorageKey, selectedTheme);

            if (selectedTheme === 'dark') {
                document.body.setAttribute("data-bs-theme", selectedTheme);
            } else {
                document.body.removeAttribute("data-bs-theme");
            }

            updateButtonState(selectedTheme);
        }

        function updateButtonState(theme) {
            var enableDarkmodeButton = document.getElementById("enableDarkmodeButton");
            var enableLightmodeButton = document.getElementById("enableLightmodeButton");

            if (theme === 'dark') {
                enableDarkmodeButton.style.display = "none";
                enableLightmodeButton.style.display = "block";
                document.body.setAttribute("data-bs-theme", 'dark');
            } else {
                enableDarkmodeButton.style.display = "block";
                enableLightmodeButton.style.display = "none";
            }
        }

        updateButtonState(localStorage.getItem(themeStorageKey) || defaultTheme);

        var enableDarkmodeButton = document.getElementById("enableDarkmodeButton");
        if (enableDarkmodeButton) {
            enableDarkmodeButton.onclick = function() {
                toggleTheme();
            };
        }

        var enableLightmodeButton = document.getElementById("enableLightmodeButton");
        if (enableLightmodeButton) {
            enableLightmodeButton.onclick = function() {
                toggleTheme();
            };
        }

        // Xử lý font chữ
        const textContent = document.querySelector('#text-content');
        const decrement = document.querySelector('#decrement');
        const fontSizeDOM = document.querySelector('#font-size');
        const increment = document.querySelector('#increment');
        const defautl = document.querySelector('#defautl');


        let fontSize = 16;
        textContent.style.fontSize = fontSize + 'px';
        fontSizeDOM.innerHTML = fontSize;

        defautl.onclick = () => {
            fontSize = 16;
            textContent.style.fontSize = fontSize + 'px';
            fontSizeDOM.innerHTML = fontSize;
        }

        increment.onclick = () => {
            fontSize++;
            textContent.style.fontSize = fontSize + 'px';
            fontSizeDOM.innerHTML = fontSize;
        };

        decrement.onclick = () => {
            fontSize--;
            textContent.style.fontSize = fontSize + 'px';
            fontSizeDOM.innerHTML = fontSize;
        };
    </script>
@endsection
