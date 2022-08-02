// create enum
export enum ReponseStatus {
    GOING = 1,
    MAYBE = 2,
    NOTGOING = 3,
    NORESPONSE = 4,
}

export function statusText() {
    return {
        1: "Going",
        2: "Maybe",
        3: "Not Going",
        4: "No Response",
    };
}
