/**
 * Trikoli Core — front-end runtime (vanilla, no dependencies).
 * Powers interactive blocks: scroll-reveal, number counters, FAQ accordions.
 */
( function () {
	'use strict';

	/* Scroll reveal */
	var revealEls = document.querySelectorAll( '.tk-reveal' );
	if ( revealEls.length && 'IntersectionObserver' in window ) {
		var ro = new IntersectionObserver(
			function ( entries, obs ) {
				entries.forEach( function ( e ) {
					if ( e.isIntersecting ) {
						e.target.classList.add( 'is-visible' );
						obs.unobserve( e.target );
					}
				} );
			},
			{ threshold: 0.15 }
		);
		revealEls.forEach( function ( el ) {
			ro.observe( el );
		} );
	} else {
		revealEls.forEach( function ( el ) {
			el.classList.add( 'is-visible' );
		} );
	}

	/* Number counters */
	function animateCounter( el ) {
		var target = parseFloat( el.getAttribute( 'data-tk-counter' ) ) || 0;
		var decimals = ( el.getAttribute( 'data-tk-counter' ).split( '.' )[ 1 ] || '' ).length;
		var dur = 1600;
		var start = null;
		function step( ts ) {
			if ( ! start ) {
				start = ts;
			}
			var p = Math.min( ( ts - start ) / dur, 1 );
			var val = ( target * ( 1 - Math.pow( 1 - p, 3 ) ) ).toFixed( decimals );
			el.textContent = val;
			if ( p < 1 ) {
				requestAnimationFrame( step );
			}
		}
		requestAnimationFrame( step );
	}
	var counters = document.querySelectorAll( '[data-tk-counter]' );
	if ( counters.length && 'IntersectionObserver' in window ) {
		var co = new IntersectionObserver(
			function ( entries, obs ) {
				entries.forEach( function ( e ) {
					if ( e.isIntersecting ) {
						animateCounter( e.target );
						obs.unobserve( e.target );
					}
				} );
			},
			{ threshold: 0.6 }
		);
		counters.forEach( function ( el ) {
			co.observe( el );
		} );
	} else {
		counters.forEach( animateCounter );
	}

	/* FAQ accordions (event delegation) */
	document.addEventListener( 'click', function ( ev ) {
		var q = ev.target.closest( '.tk-faq__q' );
		if ( ! q ) {
			return;
		}
		var item = q.closest( '.tk-faq__item' );
		if ( ! item ) {
			return;
		}
		var open = item.classList.contains( 'is-open' );
		var single = item.closest( '.tk-faq' );
		if ( single && single.getAttribute( 'data-single' ) === 'true' ) {
			single.querySelectorAll( '.tk-faq__item.is-open' ).forEach( function ( i ) {
				i.classList.remove( 'is-open' );
			} );
		}
		item.classList.toggle( 'is-open', ! open );
		q.setAttribute( 'aria-expanded', String( ! open ) );
	} );
}() );
