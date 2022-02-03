@extends('layouts.master')
@section('content')
    <div class="row">
        <h3>Terms & Conditions</h3>
        <ul>
            <li>
                <p>You can decide which country's laws apply to govern the agreement. This is otherwise known as choosing the jurisdiction. You will generally choose the country where the website, or business, is based.</p>
            </li>
            <li>
                <p>You can remove or delete abusive accounts. For example, say you run a social media platform and explain that people who post inflammatory, abusive, or explicit content will be blocked from the service. Someone posts abusive content. You can block their account without worry, because you can rely on your Terms and Conditions agreement.</p>
            </li>
            <li>
                <p>You can limit your responsibility. You can include disclaimer clauses in your agreement that say you're not liable for third party content, and you don't endorse it. You can also say that you're not responsible for mistakes and typos, or content uploaded by users which other users may find offensive.</p>
            </li>
            <li>
                <p>You can manage a user's expectations of your website or platform. When the terms are clear, users know what they can and cannot expect from you.</p>
            </li>
            <li>
                <p>You can set your own site rules and the consequences for violating these rules, within legal limits. You can't contract out of certain rules such as the law of negligence.</p>
            </li>
            <li>
                <p>It's vital that you protect your intellectual property rights. By setting out what your rights are in the Terms and Conditions agreement, you can take action against users who infringe your rights. It should be clear that the logo, brand, and content belong to you.</p>
            </li>
        </ul>
        <form action="{{route('index')}}">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" required>
                <label class="form-check-label" for="flexCheckIndeterminate">
                    I agree to the terms & conditions.
                </label>
            </div>
            <button class="btn btn-dark w-25">Agree</button>
        </form>
    </div>
@endsection
