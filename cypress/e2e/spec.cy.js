describe("testimonials", () => {
	it("list testimonials", () => {
		cy.visit("localhost/testimonials-project");

		cy.get("h1").should("have.text", "testimonials").should("be.visible");
		cy.get("ul[name=testimonials-list").should("be.visible");
	});

	it("creates a testimonials", () => {
		cy.visit("localhost/testimonials-project");

		cy.get("form").should("be.visible");

		const testFeedback = "Example feedback";
		const testRating = 5;
		cy.get("form input[name=feedback]").type(testFeedback);
		cy.get("form input[name=rating]").type(testRating);

		cy.get("form input[type=submit]").click();

		cy.url().should("eq", "http://localhost/testimonials-project/create.php");

		cy.contains("Testimonial Created!");

		cy.get("a").should("have.text", "Return to Testimonials").click();

		cy.url().should("eq", "http://localhost/testimonials-project/index.php");

		cy.get("ul[name=testimonials-list] li")
			.last()
			.should("have.text", `${testFeedback} ${testRating}/5`);
	});
});
