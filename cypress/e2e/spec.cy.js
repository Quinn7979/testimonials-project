describe("testimonials", () => {
	it("list testimonials", () => {
		cy.visit("localhost:3000/testimonials-project");

		cy.get("h1").should("have.text", "testimonials").should("be.visible");
		cy.get("ul[name=testimonials-list").should("be.visible");
	});
});
