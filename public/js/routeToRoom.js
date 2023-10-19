function routeToRoom(url, id, arrivalDate, departureDate, guests){
    let route = new URL(url);
    route.searchParams.set('listingId', id);
    route.searchParams.set('arrivalDate', arrivalDate);
    route.searchParams.set('departureDate', departureDate);
    route.searchParams.set('guests', guests);

    window.location.href = route.href;
}
