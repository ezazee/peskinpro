@extends('frontend.master.master-app')

@section('content')

<style>
.main-title {
    margin-bottom: 1rem;
    text-align: center;
    font-family: "Abril Fatface", cursive;
    font-size: 1.5rem;
    color: #2e8074;
    display: flex;
    justify-content: center;
    align-items: center;
}

.main-title:before, .main-title:after {
    content: "";
    display: block;
    margin: 0 1rem;
    flex: 1;
    border-bottom: 1px solid #2e8074;
}

.wrapper {
    max-width: 700px;
    margin: auto;
    font-family: "Source Sans Pro", sans-serif;
}

.item {
    margin-bottom: 1rem;
    border: 1px solid #2e8074;
    border-radius: 0.5rem;
    overflow: hidden;
}

.title {
    padding: 1rem;
    font-weight: bold;
    color: #2e8074;
    background-color: #f9f9f9;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background-color 0.3s ease;
}

.title:hover {
    background-color: #e0e0e0;
}

.title:after {
    content: "▼";
    font-size: 12px;
    transition: transform 0.3s ease;
}

.open .title:after {
    transform: rotate(180deg);
}

.content {
    padding: 0 1rem;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease;
    background-color: #fff;
}

.open .content {
    max-height: 300px; /* Adjust based on content size */
}

.content p {
    margin: 1rem 0;
    color: #2e8074;
    line-height: 1.6;
}

</style>

<div class="wrapper">
    <div class="main-title">Shopping Help</div>

    <div class="item">
        <div class="title">Your Account</div>
        <div class="content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid harum velit sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint dolore, deserunt dolorum accusantium.
        </div>
    </div>

    <div class="item">
        <div class="title">Payment & Pricing</div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid harum velit sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint dolore, deserunt dolorum accusantium.</p>
        </div>
    </div>

    <div class="item">
        <div class="title">Returns & Refunds</div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid harum velit sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint dolore, deserunt dolorum accusantium.</p>
        </div>
    </div>

    <div class="item">
        <div class="title">Shipping & Pickup</div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid harum velit sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint dolore, deserunt dolorum accusantium.</p>
        </div>
    </div>

    <div class="item">
        <div class="title">Viewing & Changing Orders</div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid harum velit sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint dolore, deserunt dolorum accusantium.</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const items = document.querySelectorAll('.item');

        items.forEach(item => {
            item.querySelector('.title').addEventListener('click', () => {
                // Toggle the open class
                item.classList.toggle('open');

                // Optionally: Close other items when one is opened
                items.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('open');
                    }
                });
            });
        });
    });
</script>

@endsection
