@extends('users.layouts.index')

@section('content')
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Struktur Organisasi</h2>
                <p class="lead">Mewakili hubungan dan hierarki dalam organisasi.</p>
            </div>
        </div>
    </div>

    <div class="organisasi-page section-spacing">
        <div class="container">
            <div class="tree-structure">
                <div class="node root">
                    <div class="card-cd">
                        <img src="users/images/home/poto.jpg" alt="Kepala Desa" class="node-image">
                        <div class="name">Galuh</div>
                        <div class="title">Kepala Desa</div>
                    </div>
                    <div class="line"></div>
                    <div class="sub-nodes">
                        <div class="node">
                            <div class="card-cd">
                                <img src="users/images/home/poto.jpg" alt="Sekretaris Desa" class="node-image">
                                <div class="name">Gaje</div>
                                <div class="title">Sekretaris Desa</div>
                            </div>
                            <div class="line"></div>
                            <div class="sub-nodes">
                                <div class="node">
                                    <div class="card-cd">
                                        <img src="users/images/home/poto.jpg" alt="Kepala Bidang Umum" class="node-image">
                                        <div class="name">Nahda</div>
                                        <div class="title">Kepala Bidang Umum</div>
                                    </div>
                                </div>
                                <div class="node">
                                    <div class="card-cd">
                                        <img src="users/images/home/poto.jpg" alt="Kepala Bidang Keuangan"
                                            class="node-image">
                                        <div class="name">Wildann</div>
                                        <div class="title">Kepala Bidang Keuangan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="node">
                            <div class="card-cd">
                                <img src="users/images/home/poto.jpg" alt="Kepala Urusan" class="node-image">
                                <div class="name">Nego</div>
                                <div class="title">Kepala Urusan</div>
                            </div>
                            <div class="line"></div>
                            <div class="sub-nodes">
                                <div class="node">
                                    <div class="card-cd">
                                        <img src="users/images/home/poto.jpg" alt="Kepala Urusan Perencanaan"
                                            class="node-image">
                                        <div class="name">Opal</div>
                                        <div class="title">Kepala Urusan Perencanaan</div>
                                    </div>
                                </div>
                                <div class="node">
                                    <div class="card-cd">
                                        <img src="users/images/home/poto.jpg" alt="Kepala Urusan Pembangunan"
                                            class="node-image">
                                        <div class="name">Ega</div>
                                        <div class="title">Kepala Urusan Pembangunan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="node">
                            <div class="card-cd">
                                <img src="users/images/home/poto.jpg" alt="Badan Permusyawaratan Desa" class="node-image">
                                <div class="name">Nita</div>
                                <div class="title">Badan Permusyawaratan Desa</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .tree-structure {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .node {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 20px 0;
    }

    .card-cd {
        background: white;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .name {
        font-size: 1.1rem;
        font-weight: bold;
        color: #333;
        margin: 5px 0;
    }

    .title {
        font-size: 1rem;
        color: #388e3c;
        margin: 10px 0 0 0;
    }

    .node-image {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
    }

    .sub-nodes {
        display: flex;
        justify-content: center;
        margin-top: 15px;
    }

    .sub-nodes .node {
        margin: 0 30px;
        position: relative;
    }

    .line {
        position: absolute;
        top: -20px;
        left: 50%;
        width: 2px;
        height: 20px;
        background-color: #388e3c;
        transform: translateX(-50%);
    }

    .node.root .line {
        display: none;
    }

    @media (max-width: 768px) {
        .sub-nodes {
            flex-direction: column;
        }
    }
</style>
