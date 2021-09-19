import templates from "../status/templates.js";

export function render(bg, text) {
    const status = Object.values(templates).find(key => key.bg === bg && key.text === text);

    if (typeof status === typeof {}) {
        return `${bg} ${text} py-1 px-3 rounded-full text-xs`
    }

    throw new Error("Err...");
}