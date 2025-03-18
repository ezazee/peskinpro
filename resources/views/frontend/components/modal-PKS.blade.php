<div id="customPKS" class="modal-pks hidden">
    <div class="modal-content">
        <!-- Tombol Close -->
        <span class="modal-pks-close">&times;</span>

        <!-- Container Modal -->
        <div class="modal-container">
            <div class="modal-left">
                <!-- Detail Produk -->
                <h6 class="section-title text-center">Perjanjian Kerja Sama</h6>
                <h6 class="section-title text-center">PKS</h6>
                <div class="mt-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima dignissimos id odit fugit nihil
                        quisquam, officia eos ratione alias aut ut quos facere eaque libero omnis dolores rem
                        exercitationem, quis necessitatibus inventore? Similique voluptate hic eum optio repellendus
                        dolores vel modi, quis aliquam perferendis quibusdam nisi quae non commodi repellat recusandae!
                        Illum architecto quas ipsa perspiciatis vero voluptatem nostrum maiores. Maiores, provident
                        deserunt. Ipsum aliquam maxime nostrum vitae incidunt molestiae mollitia est, earum labore eaque
                        veritatis illo consequatur nam pariatur exercitationem magni deleniti asperiores aperiam ex
                        molestias. Libero placeat et iure? Quos necessitatibus adipisci amet saepe doloribus dolorem
                        corporis dolore!</p>
                    <p>The standard Lorem Ipsum passage, used since the 1500s
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

                        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui
                        in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat
                        quo voluptas nulla pariatur?"

                        1914 translation by H. Rackham
                        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                        but because occasionally circumstances occur in which toil and pain can procure him some great
                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                        except to obtain some advantage from it? But who has any right to find fault with a man who
                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                        produces no resultant pleasure?"

                        Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                        cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est
                        laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                        tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                        quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates
                        repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente
                        delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus
                        asperiores repellat."

                        1914 translation by H. Rackham
                        "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                        and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                        foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail
                        in their duty through weakness of will, which is the same as saying through shrinking from toil
                        and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our
                        power of choice is untrammelled and when nothing prevents our being able to do what we like
                        best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and
                        owing to the claims of duty or the obligations of business it will frequently occur that
                        pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in
                        these matters to this principle of selection: he rejects pleasures to secure other greater
                        pleasures, or else he endures pains to avoid worse pains."</p>
                </div>

            </div>
        </div>

        <div class="modal-footer mt-5 flex gap-5 justify-center">
            <button type="submit" class="button-main text-xs py-1 rounded-lg flex items-end">Setuju</button>
            <button type="submit" class=" text-danger text-xs py-1 rounded-lg flex items-end">Tidak Setuju</button>
        </div>
    </div>
</div>

{{-- Backdrop --}}
<div id="modal-pks-backdrop" class="hidden modal-pks-backdrop"></div>

<style>
    /* Layout */
    .modal-container {
        display: flex;
        gap: 16px;
        padding: 16px;
        height: auto;
        max-height: 90vh;
        overflow: hidden;
        flex-direction: row;
    }

    .modal-left {
        flex: 2;
        overflow-y: auto;
        height: 500px;
        padding-right: 16px;
        border-right: 1px solid #e0e0e0;
    }

    .modal-right {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 16px;
        align-items: flex-start;
    }

    /* Styling untuk Teks dan Elemen */
    .transaction-status .status-title {
        font-weight: bold;
        font-size: 16px;
        color: #333;
        margin-bottom: 4px;
    }

    .transaction-status .invoice-number {
        color: #007bff;
        text-decoration: none;
        font-size: 14px;
    }

    .section-title {
        font-weight: bold;
        font-size: 17px;
        color: var(--primary);
    }

    .buy-again-btn {
        background-color: #007bff;
        color: #fff;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        font-size: 12px;
        cursor: pointer;
    }

    /* Tombol Aksi di Kanan */
    .action-btn {
        width: 100%;
        padding: 8px;
        background-color: var(--primary);
        color: #fff;
        border: none;
        border-radius: 4px;
        text-align: center;
        font-size: 14px;
        cursor: pointer;
    }

    .action-btn:hover {
        background-color: var(--primary);
    }

    /* Scroll Styling */
    .modal-left::-webkit-scrollbar {
        width: 8px;
    }

    .modal-left::-webkit-scrollbar-thumb {
        background-color: #c4c4c4;
        border-radius: 4px;
    }

    /* Adjust Tracking Steps Layout */
    .tracking-steps {
        display: flex;
        justify-content: space-between;
        gap: 16px;
        /* Space between steps */
    }

    /* Each Step */
    .step {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-direction: row;
        /* Ensures step items are laid out horizontally */
    }

    /* Step Icons */
    .step-icon {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-weight: bold;
        border: 2px solid #e0e0e0;
        background-color: #f5f5f5;
        color: #999;
        flex-shrink: 0;
        position: relative;
    }

    /* Add Icon through CSS */
    .step-icon::before {
        content: '●';
        font-size: 16px;
        color: inherit;
    }

    .step.completed .step-icon::before {
        content: '✔';
    }

    .step.active .step-icon::before {
        content: '◉';
    }

    /* Step Info */
    .step-info {
        display: flex;
        flex-direction: column;
    }

    /* Optional: Adjust the size of the titles and dates for horizontal layout */
    .step-title {
        font-weight: bold;
        margin: 0;
        font-size: 14px;
    }

    .step-date {
        font-size: 12px;
        color: #666;
    }

    /* Step States */
    .step.completed .step-icon {
        background-color: var(--light-primary);
        color: var(--primary);
        border-color: var(--light-primary);
    }

    .step.active .step-icon {
        background-color: var(--primary);
        color: white;
        border-color: var(--primary);
    }

    .step:not(.completed):not(.active) .step-icon {
        background-color: #f5f5f5;
        color: #999;
        border-color: #e0e0e0;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .modal-container {
            flex-direction: column;
        }

        .modal-left {
            padding-right: 0;
            border-right: none;
            margin-bottom: 16px;
        }

        .modal-right {
            width: 100%;
        }

        .tracking-title {
            font-size: 18px;
        }

        .tracking-steps {
            flex-direction: column;
            /* Stack steps vertically */
            align-items: flex-start;
            /* Align to the start */
            gap: 10px;
            /* Reduced gap for better spacing */
        }

        /* Adjust individual step items */
        .step {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            /* Reduced gap */
            width: 100%;
            /* Make each step take full width */
        }

        .step-icon {
            width: 24px;
            /* Reduced size for small screens */
            height: 24px;
            font-size: 14px;
            /* Adjust icon text size */
        }

        .step-info {
            display: block;
            /* Stack the title and date vertically */
        }

        .step-title {
            font-size: 13px;
            /* Smaller title font size */
        }

        .step-date {
            font-size: 11px;
            /* Smaller date font size */
        }

        .action-btn {
            font-size: 12px;
            padding: 10px 15px;
        }
    }

    /* RESPONSIVE DESIGN */

    /* Untuk layar tablet dan lebih kecil */
    @media (max-width: 1024px) {
        .modal-container {
            flex-direction: column;
            gap: 12px;
            padding: 12px;
        }

        .modal-left {
            height: 400px;
            /* Kurangi tinggi konten agar tidak terlalu panjang */
            padding-right: 0;
            border-right: none;
        }
    }

    /* Untuk layar HP */
    @media (max-width: 768px) {
        .modal-container {
            padding: 10px;
        }

        .modal-left {
            height: 350px;
            /* Sesuaikan tinggi modal di HP */
            padding: 8px;
        }

        .modal-text p {
            font-size: 13px;
            line-height: 1.4;
        }

        .section-title {
            font-size: 15px;
            /* Judul lebih kecil */
        }

        .action-btn {
            font-size: 13px;
            padding: 10px 12px;
            /* Tombol lebih nyaman di HP */
        }
    }

    /* Untuk layar sangat kecil (di bawah 480px) */
    @media (max-width: 480px) {
        .modal-left {
            height: auto;
            max-height: 300px;
        }

        .modal-text p {
            font-size: 12px;
        }

        .action-btn {
            font-size: 12px;
            padding: 8px 10px;
        }
    }
</style>
