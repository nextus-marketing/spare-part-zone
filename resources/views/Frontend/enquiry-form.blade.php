<!-- resources/views/Frontend/parts-call-box.blade.php -->
<style>
    .call__box {
        position: relative;
        text-align: center;
        padding: 0.5rem 0.5rem 1rem;
        overflow: hidden;
    }

    .call__box--badge {
        display: inline-block;
        background: #e8f0fe;
        color: #ff4e21;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        padding: 6px 16px;
        border-radius: 50px;
        margin-bottom: 1.2rem;
    }

    .call__box--icon {
        width: 68px;
        height: 68px;
        margin: 0 auto 1rem;
        border-radius: 50%;
        background: #ff4e21;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .call__box--icon i {
        font-size: 28px;
        color: #fff;
    }

    .call__box h3 {
        font-size: 22px;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 0.6rem;
    }

    .call__box p {
        font-size: 15px;
        color: #666;
        max-width: 320px;
        margin: 0 auto 1.5rem;
        line-height: 1.6;
    }

    .call__box--number {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #ff4e21;
        color: #fff !important;
        font-size: 20px;
        font-weight: 700;
        padding: 14px 28px;
        border-radius: 50px;
        text-decoration: none;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .call__box--number:hover {
        background: #000000ff;
        transform: translateY(-2px);
        color: #fff;
    }

    .call__box--number i {
        font-size: 18px;
    }

    .call__box--sub {
        margin-top: 1rem;
        font-size: 13px;
        color: #999;
    }

    .call__box--sub a {
        color: #ff4e21;
        font-weight: 600;
        text-decoration: underline;
    }
</style>

<div class="call__box">
    <span class="call__box--badge">Skip the search</span>

    <div class="call__box--icon">
        <i class="fa fa-headset"></i>
    </div>

    <h3>Talk to a Parts Specialist</h3>

    <p>
        Give us your VIN, make, model, or part number and one of our
        specialists will find it for you in minutes no guesswork,
        no scrolling through pages.
    </p>

    <a href="tel:+18555815811" class="call__box--number">
        <i class="fa fa-phone"></i> +1 (855) 581-5811
    </a>

</div>